<?php
require 'koneksi.php';
$produk = tampil("SELECT * FROM susu");

session_start();

// Periksa jika pengguna belum login, arahkan ke halaman login jika belum login
if (!isset($_SESSION["logged_in"])) {
    header("Location: admin.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Susu</title>
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.latar {
  width: 95%;
  height: 100%;
}

/* CSS untuk header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 25px;
  width: 100%;
  height: 80px;
  background-color: #f1f1f1;
}

.header h1 {
  font-family: Courier;
  font-size: 28px;
  color: #fed136;
  margin: 0;
}

/* CSS untuk daftar navigasi */
.list {
  display: flex;
  justify-content: center;
  align-items: center;
}

.list li {
  list-style-type: none;
  padding: 15px;
}

.list li a {
  text-decoration: none;
  color: #000;
}

.list li:hover {
  opacity: 0.6;
}

/* CSS untuk judul halaman */
.judul {
  height: 100%;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.judul h1 {
  margin: 0;
}

/* CSS untuk tombol tambah produk */
a {
  display: inline-block;
  margin: 10px;
  padding: 8px 16px;
  background-color: #4caf50;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

a:hover {
  background-color: #45a049;
}

/* CSS untuk tabel */
table {
  margin: 20px auto;
  border-collapse: collapse;
}

th,
td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: left;
}

th {
  background-color: #f1f1f1;
}

/* CSS untuk gambar produk */
td img {
  max-width: 150px;
  height: auto;
}

/* CSS untuk tombol aksi */
td a {
  text-decoration: none;
  color: #000;
}

td a:hover {
  font-weight: bold;
}

</style>
<body>
    <div class="latar">
        <div class="header">
            <h1>SPYPRICE</h1>
            <div class="list">
                <li><a href="beras.php">BERAS</a></li>
                <li><a href="gula.php">GULA</a></li>
                <li><a href="susu.php">SUSU</a></li>
                <li><a href="minyak.php">MINYAK GORENG</a></li>
                <li><a href="telur.php">TELUR</a></li>
                <li><a href="garam.php">GARAM</a></li>
              <li>
                  <form action="logout.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                  </form>
                </li>
            </div>
        </div>
    <div class="judul">
    <h1>Produk Susu</h1>
    </div>
    

    <a href="tambah2.php">Tambah produk Susu</a>

    <table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>id barang</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>nama toko</th>
        <th>nama barang</th>
        <th>ukuran barang</th>
        <th>harga barang</th>
    </tr>


    <?php foreach ($produk as $row) : ?>
    <tr>
        <td><?= $row["id_barang"]?></td>
        <td>
            <a href="ubah2.php?kode=<?= $row["id_barang"]; ?>">ubah</a> |
            <a href="hapus2.php?kode=<?= $row["id_barang"]; ?>"> hapus </a>
        </td>
        <td><img src="gambar//gula//<?php echo $row["foto_produk"]; ?>" width="150"></td>
        <td><?= $row["nama_toko"]?></td>
        <td><?= $row["nama_barang"]?></td>
        <td><?= $row["ukuran_barang"]?></td>
        <td><?= $row["harga_barang"]?></td>
    </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>