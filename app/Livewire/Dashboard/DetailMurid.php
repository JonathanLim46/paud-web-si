<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class DetailMurid extends Component
{
    public function render()
    {
        return view('livewire.dashboard.detail-murid')->layout('components.layouts.app', [
            'title' => "Murid",
            'section_title' => "Murid",
        ]);
        // return view('livewire.dashboard.detail-murid');
    }
}
