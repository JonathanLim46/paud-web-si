<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('CompanyProfile/home');
});

Route::get('tentang-kami', function() {
    return view('tentang');
});

Route::get('pendaftaran', function() {
    return view('pendaftaran');
});

Route::get('kontak', function(){
    return view('kontak');
});

Route::get('login', function(){
    return view('dashboard.dashboard');
});