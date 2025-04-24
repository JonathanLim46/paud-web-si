<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StatusPPDB;

class PendaftaranForm extends Component
{

    public $statusPPDB;

    public $step = 'ketentuan';

    public $form = [];

    public function setStep($step)
    {
        $this->step = $step;
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
        $this->statusPPDB = StatusPPDB::first()->status;
        return view('livewire.pendaftaran-form');
    }
}
