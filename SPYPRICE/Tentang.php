<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang</title>
  <link rel="stylesheet" href="tentang.css">
</head>

<body>
  <div class="latar">
    <div class="header">
      <a href="homepage.php"><h1>SPYPRICE</h1></a>
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
      <!-- label -->
      <section class="label">
        <div class="container">
          <p><a href="homepage.php">Home</a> / Tentang</p>
        </div>
      </section>
    </div>
    <section id="Tentang">
      <div id="Tentang-content">
        <h1>SPYPRICE.</h1>
        <p>
          Adalah alat yang berguna untuk membandingkan harga produk di beberapa mini market.
          Cari produk, bandingkan harga, dan temukan mini market
          terdekat yang menawarkan harga terbaik.
          Hemat uang dan waktu dalam berbelanja!
        </p>
      </div>
      <div id="Tentang-content">
        <img src="Asset//tentang.jpg" alt="Distribution Company" />
      </div>
    </section>
    <section id="service">
      <h1>Service</h1>
      <p>Berikut ini adalah layanan yang kami sediakan.</p>
      <div id="service-content">
        <div id="service-content-detail">
          <img src="Asset//minyak2.jpg" alt="Distributin" />
          <h2>Pembanding Harga</h2>
          <p>
            menyediakan pembanding harga untuk produk yang dijual di mini market terdekat.
            Hal ini membantu pengguna untuk membandingkan harga produk yang sama dari
            berbagai mini market dan menemukan produk yang lebih terjangkau.
          </p>
        </div>
        <div id="service-content-detail">
          <img src="Asset//123.jpg" alt="Storage" />
          <h2>Informasi Harga Produk</h2>
          <p>
            menyediakan informasi detail tentang harga produk di mini market, termasuk harga
            yang terbaru dan informasi promo atau diskon yang tersedia.
            Informasi ini membantu pengguna untuk membuat keputusan pembelian yang lebih tepat dan cerdas.
          </p>
        </div>
      </div>
    </section>
  </div>
  </div>
</body>

</html>