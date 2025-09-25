<h1>Tambah Produk</h1>

<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Produk">
    <input type="text" name="description" placeholder="Deskripsi">
    <input type="number" name="price" placeholder="Harga">
    <input type="number" name="stock" placeholder="Stok">
    <input type="text" name="category" placeholder="Kategori">
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('products.index') }}">Kembali</a>
