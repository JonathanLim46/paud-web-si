<?php

namespace App\Livewire\Dashboard\Guru;

use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class KelasPage extends Component
{
    use WithPagination;

    public function kelasDetail($id)
    {
        return redirect()->route('admin.detail-kelas', ['id' => $id]);
    }

    public function render()
    {
        $guru = Guru::where('user_id', Auth::id())->first();
        $kelass = Kelas::with('guru')
            ->where('guru_id', $guru->id_guru ?? 0)
            ->paginate(10);
        return view('livewire.dashboard.guru.kelas-page', compact('kelass'))->layout('components.layouts.app', [
            'title' => "Kelas",
            'section_title' => "Kelas",
        ]);
    }
}
