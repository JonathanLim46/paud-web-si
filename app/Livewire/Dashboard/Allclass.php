<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;
use Livewire\WithPagination;

class Allclass extends Component
{
    use WithPagination;

    public $query = '';

    public $gurus;

    public $nama_kelas = '';
 
    public $tingkat_kelas = '';

    public $wali_murid = '';

    public function search()
    {
        $this->resetPage();
    }

    public function openModal()
    {
        $this->gurus = Guru::all();
    }

    public function store()
    {
        $validated = $this->validate([
            'nama_kelas' => 'required',
            'tingkat_kelas' => 'required',
            'wali_murid' => 'required',
        ]);

        Kelas::create($validated);

        session()->flash('success', 'Kelas berhasil ditambah');
        return redirect('dashboard/kelas');
    }

    public function render()
    {
        return view('livewire.dashboard.allclass')->with([
            'kelass' => Kelas::where('nama_kelas', 'like', '%'.$this->query.'%')->paginate(5),
        ])->layout('components.layouts.app', [
            'title' => "Kelas",
            'section_title' => "Kelas",
        ]);
    }
}
