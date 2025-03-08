<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('admin', function() {
        return view('dashboard.admin.dashboard');
    });
});


