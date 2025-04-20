<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Profil extends Component
{

    public $title = 'Dashboard - Profil Sekolah' ;
    public $section_title = 'Dashboard - Profil Sekolah';

    public function render()
    {
        return view('livewire.dashboard.profil')->layout('components.layouts.app', [
            'title' => $this->title,
            'section_title' => $this->section_title,
        ]);
    }
}
