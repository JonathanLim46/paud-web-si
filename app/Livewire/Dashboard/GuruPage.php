<?php

namespace App\Livewire\Dashboard;

use App\Models\Guru;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class GuruPage extends Component
{

    use WithPagination;

    use WithFileUploads;

    public $query = '';

    public $jabatan = '';

    public $pendidikan = '';

    public $selectedIdGuru;

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

    #[Validate('image|max:2048', message: 'Masukkan gambar yang valid!')]
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
            $user = User::create([
                'name' => $this->namaGuru,
                'username' => $this->usernameGuru,
                'email' => $this->emailGuru,
                'level' => 'guru',
                'password' => bcrypt('123'),
            ]);
            
            $this->imageGuru->storeAs('user/'.$user->id, $this->imageGuru->hashName(), 'public');
            
            $user->update([
                'image' => $this->imageGuru->hashName(),
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

    public function openModal($id)
    {
        $this->selectedIdGuru = Guru::with('user')->findOrFail($id);
        $this->usernameGuru = $this->selectedIdGuru->user->username;
        $this->namaGuru = $this->selectedIdGuru->user->name;
        $this->emailGuru = $this->selectedIdGuru->user->email;
        $this->jabatanGuru = $this->selectedIdGuru->jabatan;
        $this->alamatGuru = $this->selectedIdGuru->alamat_guru;
        $this->pendidikanGuru = $this->selectedIdGuru->pendidikan;
    }

    public function update($id)
    {
        $selectedData = Guru::findOrFail($id);
    
        $selectedUser = User::findOrFail($selectedData->user_id);
    
        $this->validate([
            'usernameGuru' => 'required|unique:users,username,' . $this->selectedIdGuru->user->id,
            'emailGuru' => 'required|email|unique:users,email,' . $this->selectedIdGuru->user->id,
        ]);
    
        if ($this->imageGuru) {
            if ($selectedUser->image && Storage::disk('public')->exists('user/'.$selectedUser->id.'/'.$selectedUser->image)) {
                Storage::disk('public')->delete('user/'.$selectedUser->id.'/'.$selectedUser->image);
            }
    
            $newImageName = $this->imageGuru->hashName();
            $this->imageGuru->storeAs('user', $newImageName, 'public');
        } else {
            $newImageName = $selectedUser->image;
        }
    
        $selectedUser->update([
            'name' => $this->namaGuru,
            'username' => $this->usernameGuru,
            'email' => $this->emailGuru,
            'image' => $newImageName,
        ]);
    
        $selectedData->update([
            'jabatan' => $this->jabatanGuru,
            'alamat_guru' => $this->alamatGuru,
            'pendidikan' => $this->pendidikanGuru,
        ]);
    
        $this->reset();
    
        session()->flash('success', 'Data guru berhasil diperbarui.');
    
        return redirect()->route('admin.guru');
    }

    public function delete($id)
    {
        $data = Guru::with('user')->findOrFail($id);
    
        $folderPath = 'user/' . $data->user->id;
    
        if (Storage::disk('public')->exists($folderPath)) {
            Storage::disk('public')->deleteDirectory($folderPath);
        }
    
        $data->user->delete();
    
        session()->flash('success', 'Data Guru berhasil dihapus.');
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
