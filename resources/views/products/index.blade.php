@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Produk</a>
</div>

<div class="bg-white shadow rounded overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Deskripsi</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Harga</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Stok</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Kategori</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($products as $product)
            <tr>
                <td class="px-6 py-4">{{ $product->nama }}</td>
                <td class="px-6 py-4">{{ $product->deskripsi }}</td>
                <td class="px-6 py-4">{{ $product->harga }}</td>
                <td class="px-6 py-4">{{ $product->stok }}</td>
                <td class="px-6 py-4">{{ $product->kategori }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
