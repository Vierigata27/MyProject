<?php
 require 'koneksi.php';


 if(isset($_POST['submit'])){
    if(contact($_POST) > 0){
	  echo "<script>alert('FORM TELAH TERKIRIM');
	  window.location = 'homepage.php';
      </script>";  
  }else{
    echo mysqli_error($koneksi);
  }
  
  }

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spy Price Contact</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="latar">
		<div class="header">
			<h1>SPYPRICE</h1>
			<div class="list">
				<li><a href="homepage.php">HOME</a></li>
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
				<li><a href="tentang.php">TENTANG</a></li>
				<li><a href="team.php">TEAM</a></li>
				<li class="active"><a href="contact.php">CONTACT</a></li>
			</div>
		</div>

		<!-- CONTACT-DES -->
		<main>
			<div class="contact-des">
				<div class="des">
					<h2><strong>CONNECT WITH <span>US</span></strong></h2>
				</div>
			</div>

			<!-- CONTACT -->
			<section class="contact">
				<div class="nv">
					<h3>CONTACT INFORMATION</h3>
				</div>
				<div class="contentbox">
					<div class="content">
						<div class="box">
							<div class="icon">
								<i class="fa-solid fa-envelope"></i>
							</div>
							<h4>spyprice@gmail.com</h4>
						</div>

						<div class="box">
							<div class="icon">
								<i class="fa-solid fa-phone"></i>
							</div>
							<h4>(081)92277000</h4>
						</div>

						<div class="box">
							<div class="icon">
								<i class="fa-brands fa-linkedin"></i>
							</div>
							<h4>spyprice</h4>
						</div>

						<div class="box">
							<div class="icon">
								<i class="fa-brands fa-chrome"></i>
							</div>
							<h4>www.spyprice.com</h4>
						</div>
					</div>

					<!-- FORM -->
					<div class="wrapper">
					<form action="" method="post">
					<h2>KIRIM PESAN</h2>
						<div class="inputbox">
							<input type="text" name="nama" required="required">
							<span>Nama Lengkap</span>
						</div>
						<div class="inputbox">
							<input type="text" name="email" required="required">
							<span>Email</span>
						</div>
						<div class="inputbox">
							<textarea type="text" name="keterangan" required="required"></textarea>
							<span>Keterangan</span>
						</div>
						<div class="inputbox">
							<input type="submit" name="submit" >
						</div>
            </form>	
					</div>
				</div>
			</section>
		</main>

		<!-- FOOTER -->
		<footer>
			<div class="vn">
				<small>Copyright &copy; 2023 - Spy Price Team. All Rights Reserved.</small>
			</div>
		</footer>
</body>

</html>