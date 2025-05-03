<?php

namespace App\Livewire\Company;

use App\Models\Faq;
use Livewire\Component;

class Showfaq extends Component
{
    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.company.showfaq', compact('faqs'));
    }
}
