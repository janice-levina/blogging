<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

// Redirect default ke login
Route::get('/', function () {
    return redirect('/login');
});

// Login / Logout / Register
Auth::routes();

// Halaman home (harus login)
Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

// Resource route untuk products (harus login)
Route::resource('products', ProductController::class)->middleware('auth');
