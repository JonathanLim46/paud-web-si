<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('CompanyProfile.home');
});
Route::get('tentang-kami', function() {
    return view('tentang');
});
Route::get('profil', function() {
    return view('CompanyProfile/profilSekolah');
});

Route::get('pendaftaran', function() {
    return view('CompanyProfile/pendaftaran');
});

Route::get('kontak', function(){
    return view('CompanyProfile/kontak');
});
Route::get('kurikulum', function(){
    return view('CompanyProfile/kurikulum');
});
Route::get('galeri', function(){
    return view('CompanyProfile/galeri');
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
    Route::get('dashboard/profile/{id}/edit', [UserController::class, 'edit'])->name('akun.edit');
    Route::put('dashboard/profile/{id}', [UserController::class, 'update'])->name('akun.update');
});

Route::middleware(['auth', 'ceklevel:admin'])->group(function(){
    Route::get('dashboard/profilsekolah', function(){
        return view('dashboard.ProfilSekolah.profilSekolah');
    })->name('admin.profilsekolah');
    Route::get('dashboard/profilsekolah/galeri', [GalleryController::class, 'index'])->name('admin.profilsekolah.galeri');
    Route::post('dashboard/profilsekolah/galeri/tambah', [GalleryController::class, 'add'])->name('admin.galeri.add');
    Route::put('dashboard/profilsekolah/galeri/tambah/{$id}', [GalleryController::class, 'update'])->name('admin.galeri.update');
});


