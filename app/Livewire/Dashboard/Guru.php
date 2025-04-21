<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Guru extends Component
{
    public function render()
    {
        return view('livewire.dashboard.guru')->layout('components.layouts.app', [
            'title' => "Guru",
            'section_title' => "Guru",
        ]);
        // return view('livewire.dashboard.guru');
    }
}
