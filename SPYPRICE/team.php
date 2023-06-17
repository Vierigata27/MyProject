<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="team.css">
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

    <div class="responsive-container-block container">
        <p class="text-blk team-head-text">
          Our Team
        </p>
        <div class="responsive-container-block">
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="team/agil.jpg">
              </div>
              <p class="text-blk name">
                Mohammad Agil R
              </p>
              <p class="text-blk position">
                21081010117
              </p>
              <p class="text-blk feature-text">
                Backend Developer.
              </p>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="team/vieri.jpg">
              </div>
              <p class="text-blk name">
                Vieri Arief M
              </p>
              <p class="text-blk position">
                21081010140
              </p>
              <p class="text-blk feature-text">
                Backend Developer
              </p>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="team/bryan.jpg">
              </div>
              <p class="text-blk name">
                Bryan Alexander S
              </p>
              <p class="text-blk position">
                21081010144
              </p>
              <p class="text-blk feature-text">
                Backend Developer.
              </p>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="team/daniel.jpg">
              </div>
              <p class="text-blk name">
                Daniel Bergas P
              </p>
              <p class="text-blk position">
                21081010167
              </p>
              <p class="text-blk feature-text">
                Frontend Developer
              </p>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="team/deri.png">
              </div>
              <p class="text-blk name">
                Deri Farhan
              </p>
              <p class="text-blk position">
                21081010277
              </p>
              <p class="text-blk feature-text">
                Frontend Developer
              </p>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET7.14.png">
              </div>
              <p class="text-blk name">
                Farrel Aprilian
              </p>
              <p class="text-blk position">
                21081010300
              </p>
              <p class="text-blk feature-text">
                Frontend Developer.
              </p>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>

    </div>

</body>
</html>