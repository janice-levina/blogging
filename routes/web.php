<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login'); // otomatis ke login
});

Auth::routes(); // pastikan auth scaffold sudah terinstall

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

// Route resource untuk products, otomatis semua CRUD
Route::resource('products', ProductController::class)->middleware('auth');
