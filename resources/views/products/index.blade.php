@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        {{-- Contoh data dummy --}}
        <tr>
            <td>Produk A</td>
            <td>Deskripsi A</td>
            <td>10000</td>
            <td>10</td>
            <td>Kategori 1</td>
        </tr>
    </tbody>
</table>
@endsection
