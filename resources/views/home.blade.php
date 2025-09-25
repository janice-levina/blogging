<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    @vite('resources/css/app.css') <!-- kalau pakai Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">MyApp</a>
            <div class="space-x-4">
                @auth
                    <span class="text-gray-700">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Produk Kami</h1>

        <!-- Tombol Tambah Produk -->
        @auth
            <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">
                Tambah Produk
            </a>
        @endauth

        <!-- List Produk -->
        @if($products->count() > 0)
            <div class="grid grid-cols-3 gap-4">
                @foreach($products as $product)
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold text-lg">{{ $product->name }}</h3>
                        <p class="text-gray-700">{{ $product->description }}</p>
                        <p class="text-gray-600 mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                        <!-- Tombol Edit & Delete -->
                        <div class="mt-2 flex space-x-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 text-sm">Edit</a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Belum ada produk tersedia</p>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-auto">
        <div class="container mx-auto px-4 py-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>

</body>
</html>
