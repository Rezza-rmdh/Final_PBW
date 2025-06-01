<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - ObatFinder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('../img/login.jpeg');">

    <header class="flex justify-between items-center bg-white px-10 py-5 shadow-md sticky top-0 z-50">
        <div class="text-2xl font-bold text-gray-800">Obat<span class="text-blue-600">Finder</span></div>
        <nav class="space-x-6">
            <a href="/" class="text-gray-800 hover:text-blue-600">Beranda</a>
            <a href="#about" class="text-gray-800 hover:text-blue-600">Tentang</a>
            <a href="#contact" class="text-gray-800 hover:text-blue-600">Hubungi Kami</a>
        </nav>
    </header>

    <div class="flex flex-col items-center justify-center h-screen text-center px-6">
        <h1 class="text-2xl font-bold mb-5">Welcome to the Medication Information System!</h1>

        <form class="bg-white p-8 rounded-lg shadow-md max-w-sm w-full" method="POST" action="{{ route('login') }}">
            @csrf

            <label for="username" class="block font-semibold">Email</label>
            <input type="text" id="email" name="email" class="w-full p-3 mt-2 border rounded-lg" placeholder="Email" required>

            <label for="password" class="block font-semibold mt-4">Password</label>
            <input type="password" id="password" name="password" class="w-full p-3 mt-2 border rounded-lg" placeholder="Password" required>

            <a href="{{ route('password.request') }}" class="text-blue-500 text-sm block text-right mt-2">Forgot Password?</a> 

            <button type="submit" class="w-full mt-4 bg-gray-700 text-white font-bold py-3 rounded-lg">
                Sign in
            </button>
            <button type="button" class="w-full mt-2 bg-gray-500 text-white font-bold py-3 rounded-lg" onclick="window.location.href='{{ route('register') }}'">Sign up</button>
        </form>

        @if(session('error'))
            <p class="text-red-500 mt-3">{{ session('error') }}</p>
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