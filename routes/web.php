<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('CompanyProfile/home');
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
Route::get('login', function(){
    return view('dashboard.dashboard');
});