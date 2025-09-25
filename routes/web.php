<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ProductController;

// Halaman daftar produk
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index')
    ->middleware('auth'); // hanya bisa diakses kalau sudah login

// Halaman form tambah produk
Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create')
    ->middleware('auth'); // hanya bisa diakses kalau sudah login
