<?php

namespace App\Livewire\Dashboard;

use App\Models\Kelas;
use App\Models\Dokumen;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\DataPribadi;
use App\Models\DataSekolah;
use App\Models\DataOrangTua;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class KelasDetail extends Component
{
    use WithPagination, WithFileUploads;

    public $query = '';

    public $filterGender = '';

    public $selectedData, $isSekolahChecked, $kelasId, $data, $pendaftar;

    public $statusSekolah = 'tutup';

    // Model Data
    public $no_telp = '';

    public $data_murid = 
    [
        'nik' => '',
        'nama_lengkap' => '',
        'jenis_kelamin' => '',
        'tempat_lahir' => '',
        'tanggal_lahir' => '',
        'agama' => '',
        'anak_ke' => '',
        'berat_badan' => '',
        'tinggi_badan' => '',
        'lingkar_kepala' => '',
        'alamat_rumah' => '',
        'desa_kelurahan' => '',
        'kecamatan' => '',
        'kota_kabupaten' => '',
        'provinsi' => '',
        'kode_pos' => '',
    ];

    public $data_orang_tua_wali = 
    [
        'nama_ayah' => '',
        'nik_ayah' => '',
        'pekerjaan_ayah' => '',
        'nama_ibu' => '',
        'nik_ibu' => '',
        'pekerjaan_ibu' => '',
        'nama_wali' => '',
        'nik_wali' => '',
        'pekerjaan_wali' => '',
    ];

    public $data_sekolah = 
    [
        'npsn'  => '',
        'nama_sekolah'  => '',
        'alamat_sekolah'  => '',
        'status_sekolah'  => '',
    ];

    public $data_dokumen = [
        'kartu_keluarga' => null,
        'ktp_ayah' => null,
        'ktp_ibu' => null,
        'akta_kelahiran' => null,
        'surat_pindah' => null,
    ];

    protected $rules = [
        'no_telp' => 'required|string|min:10|max:15',
    
        // data murid
        'data_murid.nik' => 'required|numeric|digits:16',
        'data_murid.nama_lengkap' => 'required|string|max:255',
        'data_murid.jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'data_murid.tempat_lahir' => 'required|string|max:255',
        'data_murid.tanggal_lahir' => 'required|date|before_or_equal:today',
        'data_murid.agama' => 'required|string|max:100',
        'data_murid.anak_ke' => 'required|numeric|min:1',
        'data_murid.berat_badan' => 'required|numeric|min:0',
        'data_murid.tinggi_badan' => 'required|numeric|min:0',
        'data_murid.lingkar_kepala' => 'nullable|numeric|min:0',
        'data_murid.alamat_rumah' => 'required|string|max:500',
        'data_murid.desa_kelurahan' => 'required|string|max:255',
        'data_murid.kecamatan' => 'required|string|max:255',
        'data_murid.kota_kabupaten' => 'required|string|max:255',
        'data_murid.provinsi' => 'required|string|max:255',
        'data_murid.kode_pos' => 'required|string|max:10',
    
        // data orang tua dan wali
        'data_orang_tua_wali.nama_ayah' => 'required|string|max:255',
        'data_orang_tua_wali.nik_ayah' => 'required|numeric|digits:16',
        'data_orang_tua_wali.pekerjaan_ayah' => 'nullable|string|max:255',
        'data_orang_tua_wali.nama_ibu' => 'required|string|max:255',
        'data_orang_tua_wali.nik_ibu' => 'required|numeric|digits:16',
        'data_orang_tua_wali.pekerjaan_ibu' => 'nullable|string|max:255',
        'data_orang_tua_wali.nama_wali' => 'nullable|string|max:255',
        'data_orang_tua_wali.nik_wali' => 'nullable|numeric|digits:16',
        'data_orang_tua_wali.pekerjaan_wali' => 'nullable|string|max:255',
    
        // data sekolah
        'data_sekolah.npsn' => 'nullable|numeric|digits:8',
        'data_sekolah.nama_sekolah' => 'nullable|string|max:255',
        'data_sekolah.alamat_sekolah' => 'nullable|string|max:500',
        'data_sekolah.status_sekolah' => 'nullable|in:Negeri,Swasta',
    
        // data dokumen (file)
        'data_dokumen.kartu_keluarga' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'data_dokumen.ktp_ayah' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'data_dokumen.ktp_ibu' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'data_dokumen.akta_kelahiran' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'data_dokumen.surat_pindah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
    ];

    public function mount($id)
    {
        $this->data = Kelas::findOrFail($id);
        $this->kelasId = $id;
    }

    public function sekolahCheck($value)
    {
        $this->isSekolahChecked = $value;
        $this->statusSekolah = $value ? 'buka' : 'tutup';
    }

    public function search()
    {
        $this->resetPage();
    }

    public function applyFilter()
    {
        $this->render();
    }

    public function openModal($id)
    {
        $this->selectedData = Pendaftar::findOrFail($id);
    }

    public function openModalEdit($id)
    {
        $this->pendaftar = Pendaftar::findOrFail($id);

        $this->no_telp = $this->pendaftar->no_telp;
        $this->kelas_id = $this->pendaftar->kelas_id;

        $this->data_murid = [
            'nik' => $this->pendaftar->dataPribadi->nik,
            'nama_lengkap' => $this->pendaftar->dataPribadi->nama_lengkap,
            'jenis_kelamin' => $this->pendaftar->dataPribadi->jenis_kelamin,
            'tempat_lahir' => $this->pendaftar->dataPribadi->tempat_lahir,
            'tanggal_lahir' => $this->pendaftar->dataPribadi->tanggal_lahir,
            'agama' => $this->pendaftar->dataPribadi->agama,
            'anak_ke' => $this->pendaftar->dataPribadi->anak_ke,
            'berat_badan' => $this->pendaftar->dataPribadi->berat_badan,
            'tinggi_badan' => $this->pendaftar->dataPribadi->tinggi_badan,
            'lingkar_kepala' => $this->pendaftar->dataPribadi->lingkar_kepala,
            'alamat_rumah' => $this->pendaftar->dataPribadi->alamat_rumah,
            'desa_kelurahan' => $this->pendaftar->dataPribadi->desa_kelurahan,
            'kecamatan' => $this->pendaftar->dataPribadi->kecamatan,
            'kota_kabupaten' => $this->pendaftar->dataPribadi->kota_kabupaten,
            'provinsi' => $this->pendaftar->dataPribadi->provinsi,
            'kode_pos' => $this->pendaftar->dataPribadi->kode_pos,
        ];

        $this->data_orang_tua_wali = [
            'nama_ayah' => $this->pendaftar->dataOrangTua->nama_ayah,
            'nik_ayah' => $this->pendaftar->dataOrangTua->nik_ayah,
            'pekerjaan_ayah' => $this->pendaftar->dataOrangTua->pekerjaan_ayah,
            'nama_ibu' => $this->pendaftar->dataOrangTua->nama_ibu,
            'nik_ibu' => $this->pendaftar->dataOrangTua->nik_ibu,
            'pekerjaan_ibu' => $this->pendaftar->dataOrangTua->pekerjaan_ibu,
            'nama_wali' => $this->pendaftar->dataOrangTua->nama_wali,
            'nik_wali' => $this->pendaftar->dataOrangTua->nik_wali,
            'pekerjaan_wali' => $this->pendaftar->dataOrangTua->pekerjaan_wali,
        ];

        $this->data_sekolah = [
            'npsn' => $this->pendaftar->dataSekolah->npsn ?? '',
            'nama_sekolah' => $this->pendaftar->dataSekolah->nama_sekolah ?? '',
            'alamat_sekolah' => $this->pendaftar->dataSekolah->alamat_sekolah ?? '',
            'status_sekolah' => $this->pendaftar->dataSekolah->status_sekolah ?? '',
        ];
    }

    public function resetForm()
    {
        $this->reset([
            'no_telp',
            'data_murid',
            'data_orang_tua_wali',
            'data_sekolah',
            'data_dokumen',
        ]);
    }

    public function generateNis(): string
    {
        $tahunAwal = date('y');
        $tahunAkhir = $tahunAwal + 1;
        $kodeSekolah = '530';
        $prefixTahun = "{$tahunAwal}{$tahunAkhir}{$kodeSekolah}";
    
        $jumlahTahunIni = DataPribadi::where('nis', 'like', "{$prefixTahun}%")->count();
    
        $noUrut = str_pad($jumlahTahunIni + 1, 3, '0', STR_PAD_LEFT);
    
        $nis = "{$prefixTahun}{$noUrut}";
    
        return $nis;
    }

    public function store()
    {
        $validatedData = $this->validate();

        $noTelp = $validatedData['no_telp'];
        $dataPribadi = $validatedData['data_murid'];
        $orangTuaData = $validatedData['data_orang_tua_wali'];
        $sekolahData = $validatedData['data_sekolah'];
        $dokumenData = $validatedData['data_dokumen'];

        $kelas_id = $this->kelasId;
        $namaMurid = str_replace(' ', '_', $this->data_murid['nik']);
        $folderPath = "data_pendaftar/{$namaMurid}/dokumen";

        // Store dokumen ke storage
        foreach ($this->data_dokumen as $field => $file) {
            if ($file) {
                $filename = $file->hashName();
                $file->storeAs($folderPath, $filename, 'public'); 
                $this->data_dokumen[$field] = $filename; 
            }
        }

        $pendaftar = Pendaftar::create([
            'no_telp' => $noTelp,
            'status_verifikasi' => 1,
            'diterima' => 1,
            'kelas_id' => $kelas_id,
        ]);

        $murid = DataPribadi::create(array_merge($dataPribadi, [
            'pendaftaran_id' => $pendaftar->id_pendaftaran,
            'nis' => $this->generateNis(),
        ]));

        DataOrangTua::create(array_merge($orangTuaData, [
            'pendaftaran_id' => $pendaftar->id_pendaftaran
        ]));

        DataSekolah::create(array_merge($sekolahData, [
            'pendaftaran_id' => $pendaftar->id_pendaftaran
        ]));

        Dokumen::create(array_merge($this->data_dokumen, [
            'pendaftaran_id' => $pendaftar->id_pendaftaran
        ]));

        session()->flash('success', 'Data berhasil disimpan.');

        return redirect()->route('admin.detail-kelas', ['id' => $kelas_id]);
    }

    public function update($id)
    {
        $validatedData = $this->validate();

        $pendaftar = Pendaftar::findOrFail($id);

        $pendaftar->update([
            'no_telp' => $this->no_telp,
        ]);

        $pendaftar->dataPribadi->update($this->data_murid);

        $pendaftar->dataOrangTua->update($this->data_orang_tua_wali);

        $pendaftar->dataSekolah()->updateOrCreate(
            ['pendaftaran_id' => $pendaftar->id_pendaftaran], 
            $this->data_sekolah 
        );

        $kelas_id = $pendaftar->kelas_id;
        $namaMurid = str_replace(' ', '_', $this->data_murid['nik']);
        $folderPath = "data_pendaftar/{$namaMurid}/dokumen";

        $dokumenUpdate = [];

        foreach ($this->data_dokumen as $field => $file) {
            if ($file) {
                $oldFile = $pendaftar->dokumen->$field;
                if ($oldFile && Storage::disk('public')->exists("{$folderPath}/{$oldFile}")) {
                    Storage::disk('public')->delete("{$folderPath}/{$oldFile}");
                }

                $filename = $file->hashName();
                $file->storeAs($folderPath, $filename, 'public');

                $dokumenUpdate[$field] = $filename;
            }
        }

        if (!empty($dokumenUpdate)) {
            $pendaftar->dokumen->update($dokumenUpdate);
        }

        session()->flash('success', 'Data berhasil diperbarui.');

        return redirect()->route('admin.detail-kelas', ['id' => $pendaftar->kelas_id]);
    }

    public function delete($id)
    {
        $data_target = Pendaftar::findOrFail($id);
        $id_kelas = $data_target->kelas_id;
    
        $dataPribadi = $data_target->dataPribadi; 
        if ($dataPribadi) {
            $namaMurid = str_replace(' ', '_', $dataPribadi->nik); 
            $folderPath = "data_pendaftar/{$namaMurid}";
    
            Storage::disk('public')->deleteDirectory($folderPath);
        }
    
        // Hapus data pendaftar
        $data_target->delete();
    
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('admin.detail-kelas', ['id' => $id_kelas]);
    }

    public function muridDetail($id_kelas, $id_murid)
    {
        return redirect()->route('admin.detail-murid', ['id_kelas' => $id_kelas, 'id_murid' => $id_murid]);
    }

    public function render()
    {
        return view('livewire.dashboard.kelas-detail')->with([
            'murids' => Pendaftar::with('dataPribadi')->where('kelas_id', $this->kelasId)
                ->when($this->query, fn($q) =>
                    $q->whereHas('dataPribadi', fn($q2) => 
                        $q2->where('nama_lengkap', 'like', '%'.$this->query.'%')->orWhere('nis', $this->query)
                        )
                        
                )
                ->when($this->filterGender, fn($q) =>
                    $q->whereHas('dataPribadi', fn($q2) => 
                        $q2->where('jenis_kelamin', $this->filterGender))
                )
                ->paginate(10),
        ])->layout('components.layouts.app', [
            'title' => "Kelas ".$this->data->nama_kelas,
            'section_title' => "Kelas ".$this->data->nama_kelas.' - '.$this->data->tingkat_kelas,
        ]);
        // return view('livewire.dashboard.kelas-detail');
    }
}
