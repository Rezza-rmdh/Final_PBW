<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObatFinder - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    {{-- Navbar --}}
    <header class="flex justify-between items-center bg-white px-10 py-5 shadow-md sticky top-0 z-50">
        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-800">Obat<span class="text-blue-600">Finder</span></div>

        <!-- Navigasi -->
        <nav class="space-x-6">
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600">Beranda</a>
            <a href="{{ route('medicine.bookmarks') }}" class="text-gray-800 hover:text-blue-600">Bookmarks</a>
            <a href="{{ route('riwayat') }}" class="text-gray-800 hover:text-blue-600">Riwayat</a>
        </nav>

        <!-- Profil & Logout -->
        <div class="flex items-center space-x-6">
            <a href="{{ route('profile') }}">
                <img src="{{ asset('img/profile.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Logout</button>
            </form>
        </div>
    </header>

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white p-6">
        <div class="container mx-auto flex justify-between">
            <div>
                <h2 class="text-lg font-bold">Obat<span class="text-blue-400">Finder</span></h2>
                <p>Solusi Cerdas Mencari Informasi Obat</p>
                <p>Kopelma Darussalam, Kota Banda Aceh, Aceh</p>
            </div>
            <div class="space-y-2">
                <p><img src="{{ asset('img/gmail.png') }}" class="inline-block w-5"> ObatFinder@gmail.com</p>
                <p><img src="{{ asset('img/instagram.jpg') }}" class="inline-block w-5"> @ObatFinder_id</p>
                <p><img src="{{ asset('img/phone.png') }}" class="inline-block w-5"> 0821-6771-5788</p>
            </div>
        </div>
        <p class="text-center mt-4 text-gray-400">Copyright © 2025 ObatFinder</p>
    </footer>   

</body>

</html>
