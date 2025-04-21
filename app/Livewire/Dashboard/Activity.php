<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Aktivitas;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Storage;

class Activity extends Component
{

    use WithFileUploads;

    public $title = 'Dashboard - Aktivitas';

    #[RULE('required', message: 'Masukkan gambar terlebih dahulu')]
    #[RULE('image', message: 'File harus gambar')]
    #[RULE('max:2048', message: 'Ukuran file maksimal 2MB')]
    public $image;

    public $idImage;

    public function store(){
        $this->validate();

        $this->image->storeAs('aktivitas', $this->image->hashName(), 'public');
        Aktivitas::create([
            'foto_aktivitas' => $this->image->hashName(),
        ]);

        session()->flash('success', 'Gambar berhasil disimpan');
        return redirect('dashboard/profilsekolah/aktivitas');
    }

    public function update($id){
        $this->validate();
        $data = Aktivitas::findOrFail($id);

        if(Storage::disk('public')->exists('aktivitas/'.$data->foto_aktivitas)){
            Storage::disk('public')->delete('aktivitas/'.$data->foto_aktivitas);
        }

        $this->image->storeAs('aktivitas', $this->image->hashName(), 'public');
        $data->update([
            'foto_aktivitas' => $this->image->hashName(),
        ]);

        session()->flash('success', 'Gambar berhasil diperbarui');
        return redirect('dashboard/profilsekolah/aktivitas');
    }

    public function delete($id){
        $data = Aktivitas::findOrFail($id);
        Storage::disk('public')->delete('aktivitas/'.$data->foto_aktivitas);
        $data->delete();

        session()->flash('success', 'Gambar berhasil dihapus');
        return redirect('dashboard/profilsekolah/aktivitas');
    }

    public function openModal($id){
        $this->idImage = Aktivitas::findOrFail($id);
    }

    public function render()
    {
        $activitys = Aktivitas::all();
        return view('livewire.dashboard.activity', compact('activitys'))->layout('components.layouts.app', [
            'title' => $this->title,
            'section_title' => $this->title,
        ]);
    }
}
