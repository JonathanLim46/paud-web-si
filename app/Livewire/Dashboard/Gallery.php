<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class Gallery extends Component
{
    use WithFileUploads;

    #[RULE('required', message: 'Masukkan gambar terlebih dahulu')]
    #[RULE('image', message: 'File harus gambar')]
    #[RULE('max:2048', message: 'Ukuran file maksimal 2MB')]
    public $image;

    public $title = 'Dashboard - Galeri';

    public $idImage;

    public function store(){
        $this->validate();

        $this->image->storeAs('galeri', $this->image->hashName(), 'public');

        Galeri::create([
            'foto_galeri' => $this->image->hashName(),
        ]);

        session()->flash('success', 'Gambar berhasil disimpan');

        return redirect('dashboard/profilsekolah/galeri');
    }

    public function openEditModal($id){
        $data = Galeri::findOrFail($id);
        $this->idImage = $data;
    }

    public function openHapusModal($id){
        $data = Galeri::findOrFail($id);
        $this->idImage = $data;
    }

    public function update($id){
        $this->validate();

        $selectedImage = Galeri::findOrFail($id);

        if(Storage::disk('public')->exists('galeri/'.$selectedImage->foto_galeri)) {
            Storage::disk('public')->delete('galeri/'.$selectedImage->foto_galeri);
        }

        $this->image->storeAs('galeri', $this->image->hashName(), 'public');

        $selectedImage->update([
            'foto_galeri' => $this->image->hashName(),
        ]);

        session()->flash('success', 'Data berhasil diupdate');

        return redirect('dashboard/profilsekolah/galeri');
    }

    public function delete($id){
        $data = Galeri::findOrFail($id);
        Storage::disk('public')->delete('galeri/'.$data->foto_galeri);
        $data->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('dashboard/profilsekolah/galeri');
    }

    public function render()
    {
        $galeris = Galeri::all();
        return view('livewire.dashboard.gallery', compact('galeris'))->layout('components.layouts.app', [
            'title' => $this->title,
            'section_title' => $this->title,
        ]);
    }
}
