<?php
  require 'koneksi.php'; // panggil file koneksi.php yang berisi fungsi login()
  
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    login(); // panggil fungsi login() jika method HTTP adalah POST
  }

  if (isset($_SESSION["logged_in"])) {
    header("Location: homepage.php");
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
    <h2>Selamat Datang</h2>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" placeholder="Email">
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" >
    <div class="action">
      <a href="signup.php" class="btn">REGISTRASI</a>
      <button type="submit" name="login" >MASUK</button>
    </div>
  </form>
</div>

</body>
</html>
