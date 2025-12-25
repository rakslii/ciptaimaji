<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
