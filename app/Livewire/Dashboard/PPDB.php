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

    public $query = '';

    public $filter = [
        'status' => '',
        'tanggal' => '',
    ];

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

    public function search()
    {
        $this->resetPage();
    }

    public function applyFilter()
    {
        $this->render();
    }

    public function render()
    {
        $this->isOn = StatusPPDB::first()->status;

        $query = Pendaftar::join('tb_data_pribadi', 'id_pendaftaran', '=', 'tb_data_pribadi.pendaftaran_id')
        ->where(function($query) {
            $query->where('tb_data_pribadi.nik', 'like', '%'.$this->query.'%')
                  ->orWhere('tb_data_pribadi.nama_lengkap', 'like', '%'.$this->query.'%');
        });

        if (!empty($this->filter['status'])) {
            if ($this->filter['status'] === 'menunggu') {
                $query->whereNull('tb_pendaftar.diterima');
            } else {
                $statusValue = $this->filter['status'] === 'diterima' ? 1 : 0;
                $query->where('tb_pendaftar.diterima', $statusValue);
            }
        }

        if (!empty($this->filter['tanggal'])) {
            $query->whereDate('tb_pendaftar.created_at', $this->filter['tanggal']);
        }

        return view('livewire.dashboard.p-p-d-b')->with([
                'pendaftars' => $query
                        ->orderByRaw('tb_pendaftar.diterima IS NULL DESC')
                        ->orderBy('tb_pendaftar.diterima', 'desc')
                        ->paginate(10),
        ])->layout('components.layouts.app', [
            'title' => "PPDB",
            'section_title' => "PPDB",
        ]);
    }
}
