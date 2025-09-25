@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama Produk</label>
            <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Harga</label>
            <input type="number" name="harga" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Stok</label>
            <input type="number" name="stok" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Kategori</label>
            <input type="text" name="kategori" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        </div>
    </form>
</div>
@endsection
