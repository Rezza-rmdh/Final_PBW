<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookmarks - ObatFinder</title>
  <link rel="stylesheet" href="css/bookmarks.css">
</head>

<body>
  <header>
    <div class="navbar">
      <h1 class="logo">Obat<span>Finder</span></h1>
      <nav>
        <a href='/home'>Beranda</a>
        <a href='/bookmarks'>Bookmarks</a>
        <a href='/riwayat'>Riwayat</a>
      </nav>
      <div class="profile">
        <a href='/profil'><img src="img/profile.png" alt="Profile"></a>
        <form method="POST">
          <button class="logout" name="logout">Logout</button>
        </form>
      </div>
    </div>
  </header>

  <main>
    <h2>Bookmarks</h2>
    <h3>Obat yang kamu simpan</h3>

    <div class="obat-card">
      <a href="detail.php?obat=paracetamol" class="detail-link"><img src="img/Paracetamol.png" alt="Paracetamol"></a>
      <div class="obat-info">
        <h4>Paracetamol Kaplet 500 mg</h4>
        <p class="kategori">Pereda demam & nyeri</p>
        <p><a href="#">Informasi Obat</a></p>
        <p><strong>Paracetamol</strong><br>
          Analgesik & Antipiretik<br>
          Dosis: 1 kaplet tiap 4–6 jam, maksimal 8/hari<br>
          Efek Samping: Mual, ruam kulit, gangguan hati<br>
          Peringatan: Tidak untuk penderita gangguan hati</p>
        <button class="hapus-btn">Hapus Obat</button>
      </div>
    </div>

    <div class="obat-card">
      <a href="detail.php?obat=Ibuprofen" class="detail-link"><img src="img/Ibuprofen.png" alt="Ibuprofen"></a>
      <div class="obat-info">
        <h4>Ibuprofen Kaplet 400 mg</h4>
        <p class="kategori">Pereda nyeri, peradangan & demam</p>
        <p><a href="#">Informasi Obat</a></p>
        <p><strong>Ibuprofen</strong><br>
          Anti-inflamasi non-steroid (NSAID)<br>
          Dosis: 1 kaplet tiap 6–8 jam, maksimal 3–4 kali/hari<br>
          Efek Samping: Mual, sakit perut, pusing<br>
          Peringatan: Tidak untuk penderita tukak lambung atau gangguan ginjal</p>
        <button class="hapus-btn">Hapus Obat</button>
      </div>
    </div>

    <div class="obat-card">
      <a href="detail.php?obat=Cetirizine" class="detail-link"><img src="img/Cetirizine.png" alt="Cetirizine"></a>
      <div class="obat-info">
        <h4>Cetirizine HCl 10 mg</h4>
        <p class="kategori">Pereda Alergi</p>
        <p><a href="#">Informasi Obat</a></p>
        <p><strong>Cetirizine</strong><br>
          Antihistamin (anti alergi)<br>
          Dosis: 1 tablet per hari<br>
          Efek Samping: Mengantuk, mulut kering<br>
          Peringatan: Hindari penggunaan pada penderita gangguan ginjal</p>
        <button class="hapus-btn">Hapus Obat</button>
      </div>
    </div>
  </main>

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