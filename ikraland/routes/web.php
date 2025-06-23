<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // halaman homepage
});

Route::get('/tentang/fasilitas', function () {
    return view('fasilitas'); // halaman fasilitas
});

Route::get('/pertanian', function () {
    return view('pertanian');
});

Route::get('/perikanan', function () {
    return view('perikanan');
});