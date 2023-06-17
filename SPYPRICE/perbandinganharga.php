<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="perbandinganharga.css">
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
            <li><a href="homepage.php">HOMEPAGE</a></li>
            <li><a href="Tentang.php">TENTANG</a></li>
            <li><a href="team.php">TEAM</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </div>
    </div>

    <div class="main">
        <h1>PERBANDINGAN HARGA</h1>
        
    </div>
    <div class="image-row">
        <figure onclick="gula()">
            <img src="gambar//gula//gula1.jpg" alt="Gula" width="128" height="128">
            <figcaption>Gula</figcaption>
        </figure>
        <figure onclick="beras()">
            <img src="gambar//gula//Beras raja.jpg" alt="Beras" width="128" height="128">
            <figcaption>Beras</figcaption>
        </figure>
        <figure onclick="susu()">
            <img src="gambar//gula//Susu diamon.jpg" alt="Susu" width="128" height="128">
            <figcaption>Susu</figcaption>
        </figure>
        <figure onclick="minyak()">
            <img src="gambar//gula//minyak.jpg" alt="Minyak" width="128" height="128">
            <figcaption>Minyak</figcaption>
        </figure>
    </div>
    <div class="image-row">
        <figure onclick="telur()">
            <img src="gambar//gula//telur.jpg" alt="Telur" width="128" height="128">
            <figcaption>Telur</figcaption>
        </figure>
        <figure onclick="garam()">
            <img src="gambar//gula//garam.jpg" alt="Garam" width="128" height="128">
            <figcaption>Garam</figcaption>
        </figure>
    </div>
    </div>
    <script>
        function gula() {
            window.location.href = "tampil.php";
        }

        function beras() {
            window.location.href = "tampil1.php";
        }

        function susu() {
            window.location.href = "tampil2.php";
        }

        function minyak() {
            window.location.href = "tampil3.php";
        }

        function telur() {
            window.location.href = "tampil4.php";
        }
        function garam() {
            window.location.href = "tampil5.php";
        }

    </script>  
</body>
</html>