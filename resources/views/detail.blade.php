<?php
$obat = $_GET['obat'] ?? '';

$dataObat = [
  'paracetamol' => [
    'nama' => 'Paracetamol Kaplet 500 mg',
    'sub' => 'Pereda demam & nyeri',
    'generik' => 'Paracetamol',
    'kategori' => 'Analgesik & Antipiretik',
    'dosis' => '1 kaplet tiap 4-6 jam (Maks 8 kaplet/hari)',
    'efek' => 'Mual, ruam kulit, gangguan pencernaan',
    'Peringatan' => 'Tidak untuk penderita gangguan hati',
    'gejala' => ['Demam', 'Sakit Kepala', 'Nyeri', 'Flu Ringan'],
    'deskripsi' => 'Paracetamol adalah obat yang digunakan untuk meredakan demam dan nyeri ringan hingga sedang, seperti sakit kepala, nyeri otot, sakit gigi, hingga nyeri saat haid. Obat ini termasuk dalam kategori analgesik (pereda nyeri) dan antipiretik (penurun demam) yang aman digunakan dalam dosis yang tepat.',
    'gambar' => 'img/paracetamol.png',
  ],
  'amoxicillin' => [
    'nama' => 'Amoxicillin Kaplet 500 mg',
    'sub' => 'Antibiotik untuk infeksi bakteri',
    'generik' => 'Amoxicillin',
    'kategori' => 'Antibiotik',
    'dosis' => '500 mg tiap 8 jam selama 7-10 hari',
    'efek' => 'Diare, mual, ruam kulit',
    'Peringatan' => 'Hindari penggunaan pada penderita alergi penisilin',
    'gejala' => ['Infeksi', 'Batuk Berdahak', 'Radang Tenggorokan'],
    'deskripsi' => 'Amoxicillin adalah antibiotik golongan penisilin yang digunakan untuk mengobati berbagai infeksi bakteri seperti infeksi saluran pernapasan atas, infeksi kulit, dan infeksi saluran kemih. Obat ini bekerja dengan cara menghambat pertumbuhan bakteri.',
    'gambar' => 'img/amoxicillin.png',
  ],
  'ibuprofen' => [
    'nama' => 'Ibuprofen Kaplet 400 mg',
    'sub' => 'Pereda nyeri, peradangan & demam',
    'generik' => 'Ibuprofen',
    'kategori' => 'NSAID',
    'dosis' => '400 mg tiap 4–6 jam jika perlu',
    'efek' => 'Sakit perut, mual, pusing',
    'Peringatan' => 'Tidak untuk penderita tukak lambung atau gangguan gingal',
    'gejala' => ['Nyeri Otot', 'Demam', 'Sakit Gigi'],
    'deskripsi' => 'Ibuprofen adalah obat antiinflamasi nonsteroid (NSAID) yang digunakan untuk mengurangi demam, nyeri, dan peradangan. Cocok untuk meredakan nyeri otot, sakit kepala, sakit gigi, dan nyeri saat haid.',
    'gambar' => 'img/ibuprofen.png',
  ],
  'cetirizine' => [
    'nama' => 'Cetirizine HCl 10 mg',
    'sub' => 'Pereda alergi',
    'generik' => 'Cetirizine',
    'kategori' => 'Antihistamin',
    'dosis' => '10 mg 1 kali sehari',
    'efek' => 'Ngantuk, mulut kering',
    'Peringatan' => 'Hindari penggunaan pada penderita gangguan ginjal',
    'gejala' => ['Alergi', 'Gatal', 'Pilek Alergi'],
    'deskripsi' => 'Cetirizine adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti gatal, bersin, pilek, dan mata berair. Obat ini bekerja dengan menghambat zat histamin yang diproduksi tubuh saat reaksi alergi.',
    'gambar' => 'img/cetirizine.png',
  ]
];

$obatData = $dataObat[strtolower($obat)] ?? null;
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Detail Obat | ObatFinder</title>
  <link rel="stylesheet" href="css/detail.css">
</head>

<body>
  <header>
    <div class="navbar">
      <h1 class="logo">Obat<span>Finder</span></h1>
      <nav>
        <a href="home.php">Beranda</a>
        <a href="bookmarks.php">Bookmarks</a>
        <a href="riwayat.php">Riwayat</a>
      </nav>
      <div class="profile">
        <a href="profil.php"><img src="img/profile.png" alt="Profile"></a>
        <form method="POST">
          <button class="logout" name="logout">Logout</button>
        </form>
      </div>
    </div>
  </header>

  <section class="detail-section">
    <div class="search-box">
      <input type="text" placeholder="Cari nama obat...">
      <button type="button">Cari</button>
    </div>

    <?php if ($obatData): ?>
      <div class="detail-content">
        <div class="detail-left">
          <img src="<?= $obatData['gambar'] ?>" alt="<?= $obatData['nama'] ?>">
          <button class="save-btn">Simpan Obat</button>
        </div>

        <div class="detail-right">
          <h1 class="obat-title"><?= $obatData['nama'] ?></h1>
          <p class="obat-subtitle"><?= $obatData['sub'] ?></p>

          <ul class="info-list">
            <li><strong>Nama Generik:</strong> <?= $obatData['generik'] ?></li>
            <li><strong>Kategori:</strong> <?= $obatData['kategori'] ?></li>
            <li><strong>Dosis:</strong> <?= $obatData['dosis'] ?></li>
            <li><strong>Efek Samping:</strong> <?= $obatData['efek'] ?></li>
            <li><strong>Peringatan:</strong> <?= $obatData['Peringatan'] ?></li>
          </ul>

          <h3>Cocok untuk Gejala</h3>
          <ul class="gejala-list">
            <?php foreach ($obatData['gejala'] as $gejala): ?>
              <li><?= $gejala ?></li>
            <?php endforeach; ?>
          </ul>

          <h3>Deskripsi</h3>
          <p class="description"><?= $obatData['deskripsi'] ?></p>
        </div>
      </div>
    <?php else: ?>
      <p style="text-align:center; color:red;">Obat tidak ditemukan.</p>
    <?php endif; ?>
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