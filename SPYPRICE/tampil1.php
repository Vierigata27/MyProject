<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $produk = tampil("SELECT * FROM beras ORDER BY harga_barang DESC");
} else {
    $produk = tampil("SELECT * FROM beras"); // Default sorting
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="tampil.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PERBANDINGAN HARGA BERAS</title>
   <style>
.tombol {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10%;
        }

.box {
  display: none;
}

.tombol1 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10%;
        }

    .tombol1 button {
  background-color: #FED136;
  border: none;
  color: #111D05;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
}
.tombol button {
  background-color: #FED136;
  border: none;
  color: #111D05;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
}

.kotak {
  margin: 10px;
}

.kotak .gambar {
  background-color: yellow;
}

        
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn1').click(function() {
                $('#box1').toggle(); // Menggunakan toggle() untuk memperlihatkan/menyembunyikan kotak
            });
        });
    </script>
</head>

<body>
<div class="latar">
    <div class ="header">
            <h1>SPYPRICE</h1>
        <div class = "list">
        <?php
        session_start();
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
            // Tampilkan nama pengguna jika telah login
            $email = $_SESSION["email"]; // Ganti dengan variabel sesi yang sesuai
            echo '<li><a href="profile.php">Hai ' . $email . '</a></li>';
        } else {
            // Tampilkan "LOGIN" jika belum login
            echo '<li><a href="login.php">LOGIN</a></li>';
        }
        ?>
            <li><a href="perbandinganharga.php">PERBANDINGAN HARGA</a></li>
            <li><a href="Tentang.php">TENTANG</a></li>
            <li><a href="team.php">TEAM</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </div>
    </div>
  
    <h1 style="margin-top:20;text-align:center;">PERBANDINGAN HARGA BERAS</h1>
    <hr style="width:40%; margin-bottom:50px;">
    <div class="tombol">
        <button id="btn1">Cari Harga Termurah</button>
    </div>
    
    <hr style="width:20%; margin-bottom:20px;">
    <div class="tombol1">
        <form action="" method="post">
        <button type="submit" name="submit">SORTIR</button>
        </form>
    </div>

    <div class="container d-flex align-items-center justify-content-center">
    <div id="box1" class="box"> <!-- harga termurah -->
        <?php
        $hargaTermurah = 9999999999; // Harga awal yang sangat besar agar harga termurah dapat ditemukan

        foreach ($produk as $row) {
            if ($row["harga_barang"] < $hargaTermurah) {
                $hargaTermurah = $row["harga_barang"];
                $barangTermurah = $row;
            }
        }
        ?>

        <div class="kotak" style="width: 320px; height: 400px;  border: 2px solid black;">
            <div class="gambar" style="width: 100%; height: 60%;">
                <img src="gambar//gula//<?php echo $barangTermurah["foto_produk"]; ?>" style="width:100%; height:100%;">
            </div>
            <div class="isi text-center p-2" style="width: 100%; height: 30%; ">
                <h5><?= $barangTermurah["nama_barang"]?></h5>
                <h6><?= $barangTermurah["nama_toko"]?></h6>
                <h6><?= $barangTermurah["ukuran_barang"]?></h6>
            </div>
            <div class="harga text-center" style="width: 100%; height: 10%;  border: 2px solid black;">
                <h3><?= $barangTermurah["harga_barang"]?></h3>
            </div>
        </div>
    </div>
</div>

    <br>
    <?php foreach ($produk as $row) : ?>
        <div class="kotak ml-5 mt-3" style="width: 320px; height: 400px;  float: left; border: 2px solid black;">
            <div class="gambar" style="width: 100%; height: 60%;">
                <img src="gambar//gula//<?php echo $row["foto_produk"]; ?>" style="width:100%; height:100%; ">
            </div>
            <div class="isi text-center p-2" style="width: 100%; height: 30%; ">
                <h5><?= $row["nama_barang"]?></h5>
                <h6><?= $row["nama_toko"]?></h6>
                <h6><?= $row["ukuran_barang"]?></h6>
            </div>
            <div class="harga text-center" style="width: 100%; height: 10%;  border: 2px solid black;">
                <h3><?= $row["harga_barang"]?></h3>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
