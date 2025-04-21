<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Kelas extends Component
{
    public function render()
    {
        return view('livewire.dashboard.kelas')->layout('components.layouts.app', [
            'title' => "Kelas",
            'section_title' => "Kelas",
        ]);
        // return view('livewire.dashboard.kelas');
    }
}
