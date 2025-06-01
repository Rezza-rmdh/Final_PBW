<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <title>Pencarian - ObatFinder</title>
  <link rel="stylesheet" href="css/search.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Header -->
  <header class="header">
    <div class="logo">Obat<span>Finder</span></div>
    <nav>
      <a href='/home'>Beranda</a>
      <a href='/bookmarks'>Bookmarks</a>
      <a href='/riwayat'>Riwayat</a>
    </nav>
    <div class="profile">
      <a href='/profil'><img src="img/profile.png" alt="Profile"></a>
      <button class="logout-btn">Logout</button>
    </div>
  </header>

  <!-- Search & Filters -->
  <section class="search-section">
    <div class="search-bar">
      <input type="text" placeholder="Cari nama obat..." />
      <button class="search-btn">Cari</button>
      <button class="filters-btn" id="filtersBtn">Filters</button>
    </div>

    <!-- Filter Categories -->
    <div class="filters-container" id="filtersContainer">
      <button class="filter-tag">Demam</button>
      <button class="filter-tag">Nyeri</button>
      <button class="filter-tag">Antibiotik</button>
      <button class="filter-tag">Analgesik</button>
      <button class="filter-tag">Vitamin</button>
      <button class="filter-tag">Asam Lambung</button>
    </div>
  </section>

  <!-- Hasil Pencarian -->
  <section class="results-section">

    <div class="result-card">
      <img src="img/paracetamol.png" alt="Paracetamol" />
      <div class="result-info">
        <h3>Paracetamol Kaplet 500 mg</h3>
        <p>Pereda Demam & nyeri</p>
        <a href="detail.php?obat=paracetamol" class="detail-link">Lihat Detail</a>
      </div>
    </div>

    <div class="result-card">
      <img src="img/amoxicillin.png" alt="Amoxicillin" />
      <div class="result-info">
        <h3>Amoxicillin Kaplet 500 mg</h3>
        <p>Antibiotik untuk infeksi bakteri</p>
        <a href="detail.php?obat=amoxicillin" class="detail-link">Lihat Detail</a>
      </div>
    </div>

    <div class="result-card">
      <img src="img/ibuprofen.png" alt="Ibuprofen" />
      <div class="result-info">
        <h3>Ibuprofen Kaplet 400 mg</h3>
        <p>Pereda nyeri, peradangan & demam</p>
        <a href="detail.php?obat=ibuprofen" class="detail-link">Lihat Detail</a>
      </div>
    </div>

    <div class="result-card">
      <img src="img/cetirizine.png" alt="Cetirizine" />
      <div class="result-info">
        <h3>Cetirizine HCl 10 mg</h3>
        <p>Antihistamin untuk alergi</p>
        <a href="detail.php?obat=cetirizine" class="detail-link">Lihat Detail</a>
      </div>
    </div>

  </section>

  <!-- Footer -->
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

  <!-- Script -->
  <script src="js/filterSearch.js"></script>
</body>

</html>