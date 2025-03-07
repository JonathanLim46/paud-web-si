<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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