<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // jangan lupa import model

class ProductController extends Controller
{
    // halaman list produk
    public function index() {
        $products = Product::all(); // ambil semua data
        return view('products.index', compact('products'));
    }

    // halaman form input produk
    public function create() {
        return view('products.create'); // form input
    }
}
