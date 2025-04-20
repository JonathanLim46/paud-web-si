<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Murid;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //

    public function index(){
        $user = Auth::user();
        if($user->level == 'admin'){
            $murids = Murid::count();
            $gurus = Guru::count();
            return view('dashboard.dashboard', compact('gurus', 'murids'));
        } elseif($user->level == 'guru'){
            return view('dashboard.dashboard');
        }
    }

}
