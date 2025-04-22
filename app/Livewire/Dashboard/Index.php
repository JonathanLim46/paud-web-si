<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\Hari;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\JadwalPelajaran;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $title = 'Dashboard';
    public $step = 'Minggu2';

    public function setStep($step)
    {
        $this->step = $step;
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
            'gurus' => Guru::count(),
            'jadwals' => JadwalPelajaran::all(),
        ])->layout('components.layouts.app', ['title' => $this->title]);
    }
}
