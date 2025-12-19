<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', function () {
    return view('product.produk');
})->name('produk');

Route::get('/keranjang', function () {
    return view('cart.keranjang');
})->name('keranjang'); // TAMBAH INI

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');
