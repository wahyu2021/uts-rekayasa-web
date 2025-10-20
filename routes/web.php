<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// // Tambahkan route lainnya sesuai kebutuhan
// Route::get('/products', function () {
//     return view('products');
// })->name('products');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');
