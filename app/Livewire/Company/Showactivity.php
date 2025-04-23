<?php

namespace App\Livewire\Company;

use Livewire\Component;
use App\Models\Aktivitas;

class Showactivity extends Component
{
    public function render()
    {
        $activitys = Aktivitas::all();
        return view('livewire.company.showactivity', compact('activitys'));
    }
}
