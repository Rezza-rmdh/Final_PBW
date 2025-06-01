<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObatFinder - Homepage</title>
    <link rel="stylesheet" href="css/home.css">
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
        <section class="hero">
            <h2>Temukan Informasi Obat <br> dengan Mudah</h2>
            <div class="search-bar">
                <input type="text" name="query" placeholder="Cari nama obat..."
                    <button onclick="window.location.href='/search'"></button>
                <button type="button" onclick="window.location.href='search.php';">Cari</button>
            </div>
        </section>



        <section class="popular">
            <h3>Daftar Obat Populer</h3>
            <div class="obat-list">
                <?php
                $populer = ['Paracetamol', 'Amoxicillin', 'Ibuprofen', 'Cetirizine'];
                foreach ($populer as $obat) {
                    echo "<div class='obat-card'>
                            <img src='img/$obat.png' alt='$obat'>
                            <h4>$obat</h4>
                            <a href='detail.php?obat=$obat'>Lihat Detail</a>
                          </div>";
                }
                ?>
            </div>
        </section>

        <section class="history">
            <h3>Riwayat Pencarian Obat</h3>
            <div class="riwayat">
                <?php
                $riwayat = [
                    ['nama' => 'Paracetamol', 'tanggal' => 'Maret 31, 2025'],
                    ['nama' => 'Amoxicillin', 'tanggal' => 'Maret 31, 2025'],
                    ['nama' => 'Ibuprofen', 'tanggal' => 'Maret 31, 2025']
                ];
                foreach ($riwayat as $r) {
                    echo "<div class='riwayat-item'>
                            <div>
                                <strong>{$r['nama']}</strong>
                                <p>{$r['tanggal']}</p>
                            </div>
                            <a href='detail.php?obat={$r['nama']}'>Lihat Detail</a>
                          </div>";
                }
                ?>
            </div>
        </section>

        <section class="saved">
            <h3>Obat yang Kamu Simpan</h3>
            <div class="obat-list">
                <?php
                $saved = ['Paracetamol', 'Ibuprofen', 'Cetirizine'];
                foreach ($saved as $obat) {
                    echo "<div class='obat-card'>
                            <img src='img/$obat.png' alt='$obat'>
                            <h4>$obat</h4>
                            <form method='POST'>
                                <button class='hapus' name='hapus_$obat'>Hapus</button>
                            </form>
                          </div>";
                }
                ?>
            </div>
        </section>
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