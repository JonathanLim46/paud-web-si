<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('CompanyProfile.home');
});

// Route::get('tentang-kami', function() {
//     return view('tentang');
// });

// Route::get('pendaftaran', function() {
//     return view('pendaftaran');
// });

// Route::get('kontak', function(){
//     return view('kontak');
// });

Route::get('login', [AuthController::class, 'index']);
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');