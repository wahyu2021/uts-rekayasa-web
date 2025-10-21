<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


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
