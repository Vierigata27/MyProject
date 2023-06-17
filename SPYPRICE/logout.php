<?php
session_start();

// Hapus semua data sesi
session_destroy();

// Arahkan pengguna kembali ke halaman login
header("Location: admin.php");
exit();
?>