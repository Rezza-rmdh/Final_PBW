<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register - ObatFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('../img/login.jpeg');">

    <header class="flex justify-between items-center bg-white px-10 py-5 shadow-md sticky top-0 z-50">
        <div class="text-2xl font-bold text-gray-800">Obat<span class="text-blue-600">Finder</span></div>
        <nav class="space-x-6">
            <a href="#" class="text-gray-800 hover:text-blue-600">Beranda</a>
            <a href="#" class="text-gray-800 hover:text-blue-600">Tentang</a>
            <a href="#" class="text-gray-800 hover:text-blue-600">Hubungi Kami</a>
        </nav>
    </header>

    <div class="flex flex-col items-center justify-center h-screen text-center px-6">
        <h1 class="text-2xl font-bold mb-5">Create Your Account</h1>

        <form class="bg-white p-8 rounded-lg shadow-md max-w-sm w-full" method="POST" action="{{ route('register') }}">
            @csrf
            
            <label for="username" class="block font-semibold mt-4">Username</label>
            <input type="text" id="username" name="username" class="w-full p-3 mt-2 border rounded-lg" placeholder="Choose a username" required>

            <label for="email" class="block font-semibold mt-4">Email</label>
            <input type="email" id="email" name="email" class="w-full p-3 mt-2 border rounded-lg" placeholder="Your email" required>

            <label for="password" class="block font-semibold mt-4">Password</label>
            <input type="password" id="password" name="password" class="w-full p-3 mt-2 border rounded-lg" placeholder="Choose a password" required>

            <button type="submit" class="w-full mt-4 bg-gray-700 text-white font-bold py-3 rounded-lg">
                Sign up
            </button>
            <button type="button" class="w-full mt-2 bg-gray-500 text-white font-bold py-3 rounded-lg" onclick="window.location.href='{{ route('login') }}'">Back to login</button>
        </form>

        @if(session('success'))
            <p class="text-green-500 mt-3">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <ul class="text-red-500 mt-3">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>