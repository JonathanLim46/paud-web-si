<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Pendaftar;

class PPDBDetail extends Component
{

    public $status;

    public $pendaftar;

    public function mount($id)
    {
        $this->pendaftar = Pendaftar::findOrFail($id);

        if (is_null($this->pendaftar->diterima)) {
            $this->status = "Tahap Verifikasi"; 
        } elseif ($this->pendaftar->diterima == 1) {
            $this->status = "Diterima"; 
        } elseif ($this->pendaftar->diterima == 0) {
            $this->status = "Ditolak"; 
        }
    }

    public function setStatus($newStatus, $id)
    {
        $this->status = $newStatus;

        $data_pendaftar = Pendaftar::findOrFail($id);

        $statusValue = match ($newStatus) {
            'Diterima' => 1,
            'Ditolak' => 0,
            'Tahap Verifikasi' => null,
        };

        $data_pendaftar->update([
            'diterima' => $statusValue,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.p-p-d-b-detail')->layout('components.layouts.app', [
            'title' => "Data Pribadi",
            'section_title' => "Data Pribadi",
        ]);
    }
}
