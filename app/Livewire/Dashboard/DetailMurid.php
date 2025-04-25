<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class DetailMurid extends Component
{
    public $step = 'Penilaian';
    public function setStep($step)
    {
        $this->step = $step;
    }

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.dashboard.detail-murid')->layout('components.layouts.app', [
            'title' => "Murid",
            'section_title' => "Murid",
        ]);
        // return view('livewire.dashboard.detail-murid');
    }
}
