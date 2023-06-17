<?php
require 'koneksi.php';

$id_barang = $_GET["kode"];

$barang = mysqli_query($koneksi, "SELECT * FROM gula WHERE id_barang = $id_barang")->fetch_assoc();

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'gula.php';
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan!');
            document.location.href = 'gula.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data gula</title>
    <style>
        /* CSS untuk elemen h1 */
h1 {
    text-align: center;
  }
  
  /* CSS untuk form */
  form {
    margin: 0 auto;
    max-width: 400px;
    padding: 20px;
  }
  
  /* CSS untuk label */
  label {
    display: block;
    margin-bottom: 10px;
  }
  
  /* CSS untuk input dan select */
  input[type="text"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  /* CSS untuk tombol submit */
  button[type="submit"] {
    padding: 10px 20px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #45a049;
  }
  
  /* CSS untuk pesan kesalahan */
  .error {
    color: red;
    margin-bottom: 10px;
  }
  
  /* CSS untuk pesan sukses */
  .success {
    color: green;
    margin-bottom: 10px;
  }
  
    </style>
</head>
<body>
    <h1>Tambah data gula</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_barang" value="<?=$barang["id_barang"];?>"> 
     <input type="hidden" name="gambarLama" value="<?=$barang["foto_produk"];?>">  
    <ul>
      <li>
        <label for="nama_toko" value="<?=$barang["nama_toko"];?>">Nama toko : </label>
        <select name="nama_toko" id="nama_toko">
	    <option value="Indomart">Indomart</option>
	    <option value="Alfamart">alfamart</option>
	    <option value="Superindo">superindo</option>
        </select>
        </li>
        
        <li>
        <label for="nama_barang">Nama Barang : </label>
        <input type="text" name="nama_barang" id="nama_barang" required value="<?=$barang["nama_barang"];?>">
        </li>

        <li>
        <label for="ukuran_barang">Ukuran Barang : </label>
        <input type="text" name="ukuran_barang" id="ukuran_barang"required value="<?=$barang["ukuran_barang"];?>">
        </li>
    
        <li>
        <label for="harga_barang">Harga Barang : </label>
        <input type="text" name="harga_barang" id="harga_barang"required value="<?=$barang["harga_barang"];?>">
        </li>

        <li>
        <label for="foto_produk">Foto Produk : </label> <br>
         <img src="gambar/gula/<?= $barang["foto_produk"];?>" width="100px"> <br>
        <input type="file" name="foto_produk" id="foto_produk"required">
        </li>

        <li>
        <button type="submit" name="submit">Tambah Produk</button>
        </li>
    </ul>
    
    </form>
</body>
</html>