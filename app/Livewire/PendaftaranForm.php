<?php

namespace App\Livewire;

use App\Models\Dokumen;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\StatusPPDB;
use App\Models\DataPribadi;
use App\Models\DataSekolah;
use App\Models\DataOrangTua;
use Livewire\WithFileUploads;

class PendaftaranForm extends Component
{
    use WithFileUploads;

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

    public $statusPPDB, $isSekolahChecked, $kelasId;

    public $statusSekolah = 'tutup';

    public $step = 'ketentuan';

    public $form = [];

    public function setStep($step)
    {
        $this->step = $step;
    }

    public function nextStep()
    {
        if ($this->step === 'ketentuan') {
            $this->step = 'data';
        } elseif ($this->step === 'data') {
            $this->step = 'konfirmasi';
        }
    }

    public function prevStep()
    {
        if ($this->step === 'konfirmasi') {
            $this->step = 'data';
        } elseif ($this->step === 'data') {
            $this->step = 'ketentuan';
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        $noTelp = $validatedData['no_telp'];
        $dataPribadi = $validatedData['data_murid'];
        $orangTuaData = $validatedData['data_orang_tua_wali'];
        $sekolahData = $validatedData['data_sekolah'];
        $dokumenData = $validatedData['data_dokumen'];

        if (DataPribadi::where('nik', $this->data_murid['nik'])->exists()) {
            session()->flash('error', 'NIK sudah terdaftar. Gunakan NIK lain.');
            return;
        }

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
            'status_verifikasi' => null,
            'diterima' => null,
            'kelas_id' => null,
        ]);

        $murid = DataPribadi::create(array_merge($dataPribadi, [
            'pendaftaran_id' => $pendaftar->id_pendaftaran,
            'nis' => null,
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

        session()->flash('berhasilDaftar', 'Berhasil Daftar');
        return redirect()->route('company.formDaftar');
    }

    public function sekolahCheck($value)
    {
        $this->isSekolahChecked = $value;
        $this->statusSekolah = $value ? 'buka' : 'tutup';
    }

    public function render()
    {
        $this->statusPPDB = StatusPPDB::first()->status;
        return view('livewire.pendaftaran-form');
    }
}
