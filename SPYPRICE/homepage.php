<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
    <div class="latar">
        <div class="header">
            <h1>SPYPRICE</h1>
            <div class="list">
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

        <div class="main">
            <p>
            <h2>SELAMAT DATANG DI PROJECT KAMI </h2>
            </p>

            <p>
            <h1>KELOMPOK 6</h1>
            </p>

            <form action="perbandinganharga.php" method="GET">
            <input type="submit" value="PERBANDINGAN HARGA">
            </form>

        </div>
    </div>
</body>

</html>