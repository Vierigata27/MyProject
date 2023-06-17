<?php
require "koneksi.php";

$id_barang = $_GET["kode"];

if (hapus1($id_barang) > 0) {
    echo "<script>
        alert('data berhasil dihapus !');
        window.location.href = 'beras.php';
        </script>";
} else {
    echo "<script>
        alert('data gagal dihapus !');
        window.location.href = 'beras.php';
        </script>";
}
?>
