<h1>Daftar Produk</h1>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - {{ $product->price }}</li>
    @endforeach
</ul>

<a href="{{ route('products.create') }}">Tambah Produk</a>
