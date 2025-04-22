<?php

namespace App\Livewire;

use Livewire\Component;

class PendaftaranForm extends Component
{
    public $step = 'ketentuan'; // default step

    public function setStep($step)
    {
        $this->step = $step;
    }
    public $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function nextStep()
    {
        if ($this->step === 'ketentuan') {
            $this->step = 'data';
        } elseif ($this->step === 'data') {
            $this->step = 'konfirmasi';
        }
    }

    public function prevStep()
    {
        if ($this->step === 'konfirmasi') {
            $this->step = 'data';
        } elseif ($this->step === 'data') {
            $this->step = 'ketentuan';
        }
    }

    public function render()
    {
        return view('livewire.pendaftaran-form');
    }
}
