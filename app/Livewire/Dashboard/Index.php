<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\JadwalPelajaran;

class Index extends Component
{
    public $title = 'Dashboard';
    
    public function render()
    {
        return view('livewire.dashboard.index')->with([
            'murids' => Pendaftar::where('diterima', true)->count(),
            'gurus' => Guru::count(),
            'jadwals' => JadwalPelajaran::all(),
        ])->layout('components.layouts.app', ['title' => $this->title]);
    }
}
