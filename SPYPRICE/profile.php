<?php
require 'koneksi.php';
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    // Jika tidak, arahkan kembali ke halaman login
    header("Location: login.php");
    exit;
}

// Ambil informasi pengguna dari sesi
$email = $_SESSION["email"]; // Ganti dengan sesuai dengan variabel sesi yang digunakan

$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'")->fetch_assoc();

if (isset($_POST["submit"])) {
    if (update_user($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diupdate!');
            window.location.href = 'profile.php';
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan!');
            window.location.href = 'profile.php';
        </script>";
    }
}

// Halaman Profile
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile Page</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="header">
    <a href="homepage.php"><h1>SPYPRICE</h1></a>
    <div class="login-form">
      <form action="" method="post">
        <h2>Profile</h2>
        <div class="content">
          <div class="input-field">
            <input type="text" name="nama" placeholder="Nama" autocomplete="nope" value="<?=$cek["nama"];?>">
          </div>
          <div class="input-field">
            <input type="text" name="email" placeholder="Email" autocomplete="nope" value="<?=$cek["email"];?>">
          </div>
          <div class="input-field">
            <input type="text" name="no" placeholder="No Telepon" autocomplete="nope" value="<?=$cek["no"];?>">
          </div>
        </div>
        <div class="action">
          <a href="logout1.php" class="btn">LOGOUT</a>
          <button type="submit" name="submit">SIMPAN</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
