<?php
// Data dummy user
$email = "kevinr@gmail.com";
$username = "Kevin R";
$joined = "2025";

// Menangani perubahan username/password (hanya simulasi)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $new_username = $_POST["new_username"] ?? "";
  $new_password = $_POST["new_password"] ?? "";

  if (!empty($new_username)) {
    $username = htmlspecialchars($new_username);
  }

  // Simulasi password diganti (tidak disimpan karena tidak pakai database)
  if (!empty($new_password)) {
    $password_changed = true;
  }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Profil | ObatFinder</title>
  <link rel="stylesheet" href="css/profil.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Header -->
  <header class="navbar">
    <div class="logo">Obat<span>Finder</span></div>
    <nav>
      <a href='/home'>Beranda</a>
      <a href='/bookmarks'>Bookmarks</a>
      <a href='/riwayat'>Riwayat</a>
    </nav>
    <div class="profile">
      <img src="img/profile.png" alt="Profil" />
      <button class="logout">Logout</button>
    </div>
  </header>


  <!-- Profile Section -->
  <main class="profile-container">
    <div class="profile-info">
      <img src="img/user-icon.png" alt="Foto Profil" class="profile-photo">
      <h2 class="username"><?= $username ?></h2>
      <p class="joined">Joined in <?= $joined ?></p>
    </div>

    <form class="edit-form" method="POST">
      <label>Email</label>
      <input type="email" value="<?= $email ?>" readonly>

      <label>Username</label>
      <input type="text" value="<?= $username ?>" readonly>

      <label>Ganti Username</label>
      <input type="text" name="new_username" placeholder="Isi username baru...">

      <label>Ganti Password</label>
      <input type="password" name="new_password" placeholder="Isi password baru...">

      <button type="submit" class="submit-btn">Simpan Perubahan</button>
    </form>

    <?php if (!empty($password_changed)): ?>
      <p style="color:green; text-align:center; margin-top:10px;">Password berhasil diganti (simulasi).</p>
    <?php endif; ?>
  </main>

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

</body>

</html>