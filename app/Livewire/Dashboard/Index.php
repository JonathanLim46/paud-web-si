<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\JadwalPelajaran;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $title = 'Dashboard';
    public $step = 'Minggu2';

    public $hari_id, $kelas_id, $guru_id;

    public $filteredKelass = [];
    public $filteredGurus = [];

    protected $rules = [
        'hari_id' => 'required|exists:tb_hari,id_hari',
        'kelas_id' => 'required|exists:tb_kelas,id_kelas',
        'guru_id' => 'required|exists:tb_guru,id_guru',
    ];

    public function setStep($step)
    {
        $this->step = $step;
    }

    public function openTambah()
    {
        $this->hari_id = '';
        $this->kelas_id = '';
        $this->guru_id = '';
    }

    public function store()
    {
        $validated = $this->validate();

        JadwalPelajaran::create([
            'hari_id' => $this->hari_id,
            'kelas_id' => $this->kelas_id,
            'guru_id' => $this->guru_id,
        ]);

        session()->flash('success', 'Berhasil menambahkan jadwal baru');
        return redirect()->route('dashboard');
    }

    public function updated($property)
    {
        if ($property == 'hari_id') {
            $jadwalHari = JadwalPelajaran::where('hari_id', $this->hari_id)
                ->with(['kelas', 'guru.user'])
                ->get();
    
            $this->filteredKelass = $jadwalHari->pluck('kelas')
                ->unique('id_kelas')
                ->filter()
                ->values();
    
            $this->filteredGurus = [];
            $this->kelas_id = null;
            $this->guru_id = null;
        }
    
        if ($property == 'kelas_id' && $this->kelas_id) {
            $jadwalKelas = JadwalPelajaran::where('hari_id', $this->hari_id)
                ->where('kelas_id', $this->kelas_id)
                ->with('guru.user')
                ->get();
    
            $this->filteredGurus = $jadwalKelas->pluck('guru')
                ->unique('id_guru')
                ->filter()
                ->values();
        }
    }

    public function delete()
    {
        $validated = $this->validate();

        JadwalPelajaran::where('kelas_id', $this->kelas_id)
        ->where('hari_id', $this->hari_id)
        ->where('guru_id', $this->guru_id)
        ->delete();

        session()->flash('success', 'Berhasil menghapus jadwal');
        return redirect()->route('dashboard');
    }
    
    public function render()
    {
        $urutanHari = [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        ];

        return view('livewire.dashboard.index')->with([
            'murids' => Pendaftar::where('diterima', true)->count(),
            'gurus' => Guru::with('user')->get(),
            'jadwals' => JadwalPelajaran::with(['kelas', 'guru.user', 'hari'])->get(),
            'haris' => Hari::all(),
            'kelass' => Kelas::all(),
        ])->layout('components.layouts.app', ['title' => $this->title]);
    }
}
