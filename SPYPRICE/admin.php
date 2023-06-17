<?php
require 'koneksi.php';

session_start();

// Cek jika pengguna sudah login, arahkan ke halaman lain jika sudah login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    admin();
}

if (isset($_SESSION["logged_in"])) {
    header("Location: beras.php");
    exit();
}



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">

</head>
<body>
<div class ="header">
  <a href="homepage.php"><h1>SPYPRICE</h1></a>
<div class="login-form">
  <form action="" method="post">
    <h2>Selamat Datang ADMIN</h2>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" placeholder="Email">
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" >
    <div class="action">
      <button type="submit" name="login" >MASUK</button>
    </div>
  </form>
</div>

</body>
</html>
