<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Pendaftar;

class DetailMurid extends Component
{
    public $step = 'DataPribadi';

    public $kelas_id, $murid_id, $murid;

    public function setStep($step)
    {
        $this->step = $step;
    }

    public function mount($id_kelas, $id_murid)
    {
        $this->kelas_id = $id_kelas;
        $this->murid_id = $id_murid;
    
        $this->murid = Pendaftar::with('dataPribadi', 'dataOrangTua', 'dokumen', 'dataSekolah')
                        ->where('id_pendaftaran', $id_murid)
                        ->where('kelas_id', $id_kelas)
                        ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.dashboard.detail-murid')->layout('components.layouts.app', [
            'title' => "Detail Murid",
            'section_title' => "Detail Murid",
        ]);
    }
}
