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

    public $guru_id = '';

    public $selectedKelas;

    public function search()
    {
        $this->resetPage();
    }

    public function openModal()
    {
        $this->gurus = Guru::all();
        $this->nama_kelas = '';
        $this->tingkat_kelas = '';
        $this->guru_id = '';
    }

    public function openModalEdit($id)
    {
        $this->gurus = Guru::all();
        $this->selectedKelas = Kelas::findOrFail($id);
        $this->nama_kelas = $this->selectedKelas->nama_kelas;
        $this->tingkat_kelas = $this->selectedKelas->tingkat_kelas;
        $this->guru_id = $this->selectedKelas->guru->id_guru;
    }

    public function openModalDelete($id)
    {
        $this->selectedKelas = Kelas::findOrFail($id);
    }

    public function store()
    {
        $validated = $this->validate([
            'nama_kelas' => 'required',
            'tingkat_kelas' => 'required',
            'guru_id' => 'required',
        ]);

        Kelas::create($validated);

        session()->flash('success', 'Kelas berhasil ditambah');
        return redirect('dashboard/kelas');
    }

    public function update($id)
    {
        $validated = $this->validate([
            'nama_kelas' => 'required',
            'tingkat_kelas' => 'required',
            'guru_id' => 'required',
        ]);

        $data = Kelas::findOrFail($id);

        $data->update($validated);
        
        session()->flash('success', 'Kelas '.$data->nama_kelas.' berhasil diupdate');
        return redirect('dashboard/kelas');
    }

    public function delete($id)
    {
        $data = Kelas::findOrFail($id);
        $data->delete();
        session()->flash('success', 'Kelas berhasil dihapus');
        return redirect('dashboard/kelas');
    }

    public function kelasDetail($id)
    {
        return redirect()->route('admin.detail-kelas', ['id' => $id]);
    }

    public function render()
    {
        return view('livewire.dashboard.allclass')->with([
            'kelass' => Kelas::with('guru.user')->where('nama_kelas', 'like', '%'.$this->query.'%')->paginate(5),
        ])->layout('components.layouts.app', [
            'title' => "Kelas",
            'section_title' => "Kelas",
        ]);
    }
}
