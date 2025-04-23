<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class PPDBDetail extends Component
{

    public $status;

    public function mount($status = 'Tahap Verifikasi')
    {
        $this->status = $status;
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;
    }
    public function render()
    {
        return view('livewire.dashboard.p-p-d-b-detail')->layout('components.layouts.app', [
            'title' => "Data Pribadi",
            'section_title' => "Data Pribadi",
        ]);
    }
}
