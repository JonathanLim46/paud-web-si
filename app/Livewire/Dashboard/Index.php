<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Murid;
use App\Models\Guru;

class Index extends Component
{
    public $title = 'Dashboard';
    
    public function render()
    {
        return view('livewire.dashboard.index')->with([
            'murids' => Murid::count(),
            'gurus' => Guru::count(),
        ])->layout('components.layouts.app', ['title' => $this->title]);
    }
}
