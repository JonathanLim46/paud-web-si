<?php

namespace App\Livewire\Company;

use App\Models\Galeri;
use Livewire\Component;

class Showgaleri extends Component
{
    public function render()
    {

        $galeris = Galeri::all();
        return view('livewire.company.showgaleri', compact('galeris'));
    }
}
