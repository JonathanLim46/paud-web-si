<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GalleryController extends Controller
{
    //
    public function index(){
        $galeris = Galeri::all();
        return view('dashboard.ProfilSekolah.galeri', compact('galeris'));
    }

    public function add(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('image');

        $image->storeAs('galeri', $image->hashName(), 'public');

        Galeri::create([
            'foto_galeri' => $image->hashName(),
        ]);

        return redirect('dashboard/profilsekolah/galeri')->with('added', 'Gambar berhasil ditambahkan!');
    }
}
