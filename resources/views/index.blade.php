<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ObatFinder - Landing Page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container nav">
      <div class="logo">Obat<span>Finder</span></div>
      <nav>
        <a href="#">Beranda</a>
        <a href="#about">Tentang</a>
        <a href="#contact">Hubungi Kami</a>
        <a href="{{ url('/login') }}" class="btn-login">Login</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container hero-content">
      <div class="hero-text">
        <h1>Solusi Cerdas<br>Mencari Informasi Obat</h1>
        <p>Temukan informasi lengkap tentang obat dengan mudah, cepat, dan akurat</p>
        <a href="{{ url('/login') }}" class="btn-primary">Mulai</a>
      </div>
    </div>
  </section>


  <section class="about">
    <div class="container about-content">
      <div class="about-text">
        <h2>Tentang Kami</h2>
        <p>ObatFinder adalah platform pencarian obat yang dirancang untuk memudahkan masyarakat dalam menemukan
          informasi terpercaya tentang obat-obatan, dosis, indikasi, dan efek sampingnya.</p>
      </div>
      <div class="about-img">
        <img src="img/landing2.png" alt="Tentang Kami" />
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <div>
        <h2>Obat<span>Finder</span></h2>
        <p>Solusi Cerdas Mencari Informasi Obat</p>
        <p>Kopelma Darussalam,<br>Kec. Syiah Kuala,<br>Kota Banda Aceh, Aceh 23111</p>
      </div>
      <div class="contact">
        <p><img src="img/gmail.png"> ObatFinder@gmail.com</p>
        <p><img src="img/instagram.jpg"> @ObatFinder_id</p>
        <p><img src="img/phone.png"> 0821-6771-5788</p>
      </div>
    </div>
    <p class="copyright">Copyright © 2025 ObatFinder</p>
  </footer>
</body>

</html>