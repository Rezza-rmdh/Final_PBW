<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - ObatFinder</title>
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
        <h1>Welcome to the Medication Information System !</h1>
        <form class="form-box" method="post" action="">
            <label for="username">Username</label>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>

            <label for="password">Password</label>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <a href="#" class="forgot">Forgot Password?</a>

            <button type="submit" name="login">Sign in</button>
            <button type="button" class="signup" onclick="window.location.href='{{ url('/register') }}'">Sign up</button>

            <p class="or">Or log in with</p>
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
// Simulasi login tanpa database
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login check
    if ($username === "admin" && $password === "admin123") {
        header("Location: /home");
        exit();
    } else {
        echo "<script>alert('Login gagal! Coba lagi.');</script>";
    }
}
?>