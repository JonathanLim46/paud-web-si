<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use Livewire\Component;
use Livewire\WithPagination;

class GuruPage extends Component
{

    use WithPagination;

    public $query = '';

    public $jabatan = '';

    public $pendidikan = '';

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
        $gurus = Guru::with('user')
        ->when($this->query, fn($q) => 
        $q->whereHas('user', fn($q2) => $q2->where('name', 'like', '%'.$this->query.'%'))
        )
        ->when($this->jabatan, fn($q) => $q->where('jabatan', $this->jabatan))
        ->when($this->pendidikan, fn($q) => $q->where('pendidikan', $this->pendidikan))
        ->paginate(5);
        return view('livewire.dashboard.guru', compact('gurus'))->layout('components.layouts.app', [
            'title' => "Guru",
            'section_title' => "Guru",
        ]);
    }
}
