<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Faq;
use Livewire\Attributes\Rule;

class Faqs extends Component
{
    #[RULE('required', message:'Masukkan judul terlebih dahulu')]
    public $judul_FAQ;

    #[RULE('required', message:'Masukkan isi FAQ terlebih dahulu')]
    public $isi_FAQ;

    public $idFAQ;

    public $title = 'Dashboard - Kelola FAQ';

    public function store(){
        $this->validate();

        Faq::create([
            'judul_FAQ' => $this->judul_FAQ,
            'isi_FAQ' => $this->isi_FAQ,
        ]);

        session()->flash('success', 'Berhasil menambahkan FAQ');
        return redirect('dashboard/profilsekolah/faq');
    }

    public function update($id){
        $this->validate();

        $selected_FAQ = Faq::findOrFail($id);
        $selected_FAQ->update([
            'judul_FAQ' => $this->judul_FAQ,
            'isi_FAQ' => $this->isi_FAQ,
        ]);

        session()->flash('success', 'FAQ berhasil diperbarui');
        return redirect('dashboard/profilsekolah/faq');
    }

    public function delete($id){
        $selected_Data = Faq::findOrFail($id);
        $selected_Data->delete();
        session()->flash('success', 'FAQ berhasil dihapus');
        return redirect('dashboard/profilsekolah/faq');
    }

    public function openModal($id){
        $this->idFAQ = Faq::findOrFail($id);
        $this->judul_FAQ = $this->idFAQ->judul_FAQ;
        $this->isi_FAQ = $this->idFAQ->isi_FAQ;
    }

    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.dashboard.faqs', compact('faqs'))->layout('components.layouts.app', [
            'title' => $this->title,
            'section_title' => $this->title,
        ]);
    }
}
