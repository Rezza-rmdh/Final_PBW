<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pencarian - ObatFinder</title>
  <link rel="stylesheet" href="css/riwayat.css">
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
    <div class="riwayat-wrapper">
      <div class="riwayat-header">
        <h3>Riwayat Pencarian Obat</h3>
        <button class="refresh-btn"><img src="img/refresh.png"></button>
      </div>

      <div class="riwayat-container">
        <?php
        $riwayat = [
          ['nama' => 'Paracetamol', 'tanggal' => 'Maret 31, 2025'],
          ['nama' => 'Amoxicillin', 'tanggal' => 'Maret 31, 2025'],
          ['nama' => 'Ibuprofen', 'tanggal' => 'Maret 31, 2025']
        ];

        foreach ($riwayat as $r) {
          echo "
            <div class='riwayat-item'>
              <div>
                <strong>{$r['nama']}</strong><br>
                <span class='tanggal'>{$r['tanggal']}</span>
              </div>
              <a href='detail.php?obat={$r['nama']}' class='lihat-detail'>Lihat Detail &rsaquo;</a>
            </div>";
        }
        ?>
      </div>

      <form method="POST">
        <button class="hapus-btn" name="hapus">Hapus</button>
      </form>
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