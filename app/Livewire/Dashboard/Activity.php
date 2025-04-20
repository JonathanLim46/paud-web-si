<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Aktivitas;

class Activity extends Component
{
    public $title = 'Dashboard - Aktivitas';

    public function render()
    {
        $activitys = Aktivitas::all();
        return view('livewire.dashboard.activity', compact('activitys'))->layout('components.layouts.app', [
            'title' => $this->title,
            'section_title' => $this->title,
        ]);
    }
}
