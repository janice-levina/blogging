<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // pastikan model Product sudah dibuat

class HomeController extends Controller
{
    /**
     * Tampilkan halaman home beserta semua produk.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::all();

        // Kirim data produk ke view 'home'
        return view('home', compact('products'));
    }
}
