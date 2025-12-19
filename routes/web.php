<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang'); // TAMBAH INI

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
