<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObatFinder - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <header class="flex justify-between items-center bg-white px-10 py-5 shadow-md sticky top-0 z-50">
        <div class="text-2xl font-bold text-gray-800">Obat<span class="text-blue-600">Finder</span></div>
        <nav class="space-x-6">
            <a href="#" class="text-gray-800 hover:text-blue-600">Beranda</a>
            <a href="#about" class="text-gray-800 hover:text-blue-600">Tentang</a>
            <a href="#contact" class="text-gray-800 hover:text-blue-600">Hubungi Kami</a>
            <a href="{{ url('/login') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Login</a>
        </nav>
    </header>

    <section class="flex flex-col items-center justify-center text-center px-6 py-20">
        <h1 class="text-4xl font-bold mb-4">Solusi Cerdas<br>Mencari Informasi Obat</h1>
        <p class="text-lg text-gray-600 mb-6">Temukan informasi lengkap tentang obat dengan mudah, cepat, dan akurat</p>
        <a href="{{ url('/login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg font-bold">Mulai</a>
    </section>

    <section id="about" class="py-20 px-6 bg-white">
        <div class="flex flex-col md:flex-row items-center max-w-5xl mx-auto">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
                <p class="text-gray-700">ObatFinder adalah platform pencarian obat yang dirancang untuk memudahkan masyarakat dalam menemukan informasi terpercaya tentang obat-obatan, dosis, indikasi, dan efek sampingnya.</p>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="img/landing2.png" alt="Tentang Kami" class="w-full rounded-lg">
            </div>
        </div>
    </section>

    <footer class="bg-gray-200 py-10 text-center">
        <h2 class="text-xl font-bold">Obat<span class="text-blue-600">Finder</span></h2>
        <p class="text-gray-700">Solusi Cerdas Mencari Informasi Obat</p>
        <p class="text-gray-500">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111</p>
        <div class="flex justify-center mt-4 space-x-6">
            <p><img src="img/gmail.png" class="w-6 inline"> ObatFinder@gmail.com</p>
            <p><img src="img/instagram.jpg" class="w-6 inline"> @ObatFinder_id</p>
            <p><img src="img/phone.png" class="w-6 inline"> 0821-6771-5788</p>
        </div>
        <p class="text-gray-400 mt-6">Copyright © 2025 ObatFinder</p>
    </footer>

</body>

</html>