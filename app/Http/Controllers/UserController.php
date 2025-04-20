<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function edit($id){
        $user = User::findOrFail($id);
        return view('dashboard.editProfile', compact('user'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);

        $user = User::findOrFail($id);

        if($request->hasFile('image')){

            $image = $request->file('image');
            if(Storage::disk('public')->exists('user/'.$user->id.'/'.$user->image)){
                Storage::disk('public')->delete('user/'.$user->id.'/'.$user->image);
            }
            $image->storeAs('user/' . $user->id, $image->hashName(), 'public');


            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'image' => $image->hashName(),
            ]);

        } else {
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]);
        }

        return redirect('dashboard')->with('success','Data akun anda berhasil diperbarui!');
    }
}
