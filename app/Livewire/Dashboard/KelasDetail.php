<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class KelasDetail extends Component
{
    public function render()
    {
        return view('livewire.dashboard.kelas-detail')->layout('components.layouts.app', [
            'title' => "Kelas A",
            'section_title' => "Kelas A",
        ]);
        // return view('livewire.dashboard.kelas-detail');
    }
}
