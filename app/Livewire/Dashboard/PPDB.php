<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\StatusPPDB;
use Livewire\WithPagination;

class PPDB extends Component
{

    use WithPagination;

    public $isOn;

    public function toggleSwitch()
    {
        $this->isOn = !$this->isOn;

        $status = StatusPPDB::first();
    
        if($status){
            $status->update([
                'status' => $this->isOn,
            ]);
        } else {
            StatusPPDB::create([
                'status' => $this->isOn,
            ]);
        }
    }

    public function render()
    {
        $this->isOn = StatusPPDB::first()->status;
        return view('livewire.dashboard.p-p-d-b')->with([
            'pendaftars' => Pendaftar::orderByRaw('diterima IS NULL DESC')
                        ->orderBy('diterima', 'desc')
                        ->paginate(10),
        ])->layout('components.layouts.app', [
            'title' => "PPDB",
            'section_title' => "PPDB",
        ]);
    }
}
