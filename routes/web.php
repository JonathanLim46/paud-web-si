<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('CompanyProfile.home');
})->name('company.home');
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
    return view('CompanyProfile.formPendaftar');
})->name('company.formDaftar');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// });

Route::middleware(['auth', 'ceklevel:admin,guru'])->group(function () {
    Route::get('dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard/profile/{id}/edit', [UserController::class, 'edit'])->name('akun.edit');
    Route::put('dashboard/profile/{id}', [UserController::class, 'update'])->name('akun.update');
    Route::get('dashboard/kelas/{id}/kelasdetail', App\Livewire\Dashboard\KelasDetail::class)->name('admin.detail-kelas');
    Route::get('dashboard/kelas/{id_kelas}/murid/{id_murid}/', App\Livewire\Dashboard\DetailMurid::class)->name('admin.detail-murid');
});

Route::middleware(['auth', 'ceklevel:admin'])->group(function () {
    Route::get('dashboard/profilsekolah', App\LiveWire\Dashboard\Profil::class)->name('admin.profilsekolah');
    Route::get('dashboard/ppdb', App\Livewire\Dashboard\PPDB::class)->name('admin.PPDB');
    Route::get('dashboard/ppdbetail/{id}', App\Livewire\Dashboard\PPDBDetail::class)->name('admin.ppdb.detail');
    Route::get('dashboard/guru', App\Livewire\Dashboard\GuruPage::class)->name('admin.guru');
    Route::get('dashboard/kelas', App\Livewire\Dashboard\AllClass::class)->name('admin.kelas');
    Route::get('dashboard/profilsekolah/galeri', App\LiveWire\Dashboard\Gallery::class)->name('admin.profilsekolah.gallery');
    Route::get('dashboard/profilsekolah/aktivitas', App\LiveWire\Dashboard\Activity::class)->name('admin.profilsekolah.aktivitas');
    Route::get('dashboard/profilsekolah/faq', App\LiveWire\Dashboard\Faqs::class)->name('admin.profilsekolah.faq');
});

Route::middleware(['auth', 'ceklevel:guru'])->group(function () {
    Route::get('dashboard/kelas/guru', App\Livewire\Dashboard\Guru\KelasPage::class)->name('guru.kelas');
});
