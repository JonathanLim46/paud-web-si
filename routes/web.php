<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('CompanyProfile.home');
});
Route::get('tentang-kami', function () {
    return view('tentang');
});
Route::get('profil', function () {
    return view('CompanyProfile/profilSekolah');
});

Route::get('pendaftaran', function () {
    return view('CompanyProfile/pendaftaran');
});

Route::get('kontak', function () {
    return view('CompanyProfile/kontak');
});
Route::get('kurikulum', function () {
    return view('CompanyProfile/kurikulum');
});
Route::get('galeri', function () {
    return view('CompanyProfile/galeri');
});
Route::get('formdaftar', function () {
    return view('CompanyProfile/formPendaftar');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// });

Route::middleware(['auth', 'ceklevel:admin,guru'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard/profile/edit/{id}', [UserController::class, 'index'])->name('ubah_akun');
    Route::put('dashboard/profile/edit', [UserController::class, 'update'])->name('update_akun');
});

Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('dashboard/admin', function () {
        return view('dashboard.admin.dashboard');
    })->name('admin');
});
