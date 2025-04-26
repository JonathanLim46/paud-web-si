<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class GuruPage extends Component
{

    use WithPagination;

    use WithFileUploads;

    public $query = '';

    public $jabatan = '';

    public $pendidikan = '';

    // VALIDATION
    #[Validate('required', message: 'Masukkan nama guru terlebih dahulu !')]
    public $namaGuru;

    #[Validate('required|unique:users,username', message: 'Masukkan username terlebih dahulu dan valid !')]
    public $usernameGuru;

    #[Validate('required', message: 'Masukkan jabatan terlebih dahulu !')]
    public $jabatanGuru;

    #[Validate('required', message: 'Masukkan alamat guru terlebih dahulu !')]
    public $alamatGuru;

    #[Validate('required', message: 'Masukkan pendidikan terlebih dahulu !')]
    public $pendidikanGuru;

    #[Validate('required|email|unique:users,email', message: 'Masukkan email guru yang valid dan belum terdaftar!')]
    public $emailGuru;   

    #[Validate('required|image|max:2048', message: 'Masukkan gambar yang valid!')]
    public $imageGuru;

    public function search()
    {
        $this->resetPage();
    }

    public function applyFilter()
    {
        $this->render();
    }

    public function store()
    {
        $this->validate();
    
        $user = User::where('email', $this->emailGuru)->first();
    
        if ($user) {
            if ($user->level !== 'guru') {
                session()->flash('error', 'User dengan email ini sudah ada tetapi bukan level guru.');
                return;
            }
        } else {
            $this->imageGuru->storeAs('user', $this->imageGuru->hashName(), 'public');
    
            $user = User::create([
                'name' => $this->namaGuru,
                'username' => $this->usernameGuru,
                'email' => $this->emailGuru,
                'level' => 'guru',
                'image' => $this->imageGuru->hashName(),
                'password' => bcrypt('123'),
            ]);
        }
    
        Guru::create([
            'user_id' => $user->id,
            'jabatan' => $this->jabatanGuru,
            'alamat_guru' => $this->alamatGuru,
            'pendidikan' => $this->pendidikanGuru,
        ]);
    
        $this->reset();
    
        session()->flash('success', 'Guru ' . $this->namaGuru . ' berhasil ditambahkan.');
        return redirect()->route('admin.guru');
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
