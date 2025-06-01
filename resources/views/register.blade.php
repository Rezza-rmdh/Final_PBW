<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register - ObatFinder</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header class="header">
        <div class="logo">Obat<span style="color: #2e6edb;">Finder</span></div>
        <nav class="nav">
            <a href="#">Beranda</a>
            <a href="#">Tentang</a>
            <a href="#">Hubungi Kami</a>
        </nav>
    </header>

    <div class="container">
        <h1>Create Your Account</h1>
        <form class="form-box" method="post" action="">
            <label for="fullname">Full Name</label>
            <div class="input-box">
                <input type="text" id="fullname" name="fullname" placeholder="Your full name" required>
            </div>

            <label for="username">Username</label>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div>

            <label for="email">Email</label>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Your email" required>
            </div>

            <label for="password">Password</label>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Choose a password" required>
            </div>

            <button type="submit" name="register">Sign up</button>
            <button type="button" class="signup" onclick="window.location.href='{{ route('login') }}'">Back to login</button>


            <p class="or">Or sign up with</p>
            <div class="socials">
                <img src="img/google.png" alt="Google">
                <img src="img/apple.png" alt="Apple">
                <img src="img/facebook.png" alt="Facebook">
            </div>
        </form>
    </div>
</body>

</html>

<?php
// Simulasi register tanpa database
if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
}
?>