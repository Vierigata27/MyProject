<?php
  require 'koneksi.php'; // panggil file koneksi.php yang berisi fungsi singup()

  if(isset($_POST['submit'])){

    if(signup($_POST) > 0){
      echo "<script>alert('Signup Berhasil');
      window.location = 'login.php';
      </script>";  
  }else{
    echo mysqli_error($koneksi);
  }
  
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Page</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="header">
    <a href="homepage.php"><h1>SPYPRICE</h1></a>
    <div class="login-form">
      <form action="" method="post">
        <h2>Registrasi</h2>
        <div class="content">
          <div class="input-field">
            <input type="text" name="nama" placeholder="Nama" autocomplete="nope">
          </div>
          <div class="input-field">
            <input type="text" name="email" placeholder="Email" autocomplete="nope">
          </div>
          <div class="input-field">
            <input type="text" name="no" placeholder="No Telepon" autocomplete="nope">
          </div>
          <div class="input-field">
            <input type="password" name="password" placeholder="Buat Password" autocomplete="new-password">
          </div>
          <div class="input-field">
            <input type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="new-password">
          </div>
        </div>
        <div class="action">
          <a href="login.php" class="btn">LOGIN</a>
          <button type="submit" name="submit">DAFTAR</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
