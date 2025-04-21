<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class PPDB extends Component
{


    public function render()
    {
        return view('livewire.dashboard.p-p-d-b')->layout('components.layouts.app', [
            'title' => "PPDB",
            'section_title' => "PPDB",
        ]);
    }
}
