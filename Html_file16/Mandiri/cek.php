<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Cek level akses jika ditentukan
if (isset($level_akses)) {
    if ($_SESSION['level'] != $level_akses && $_SESSION['level'] != 'admin') {
        echo "<script>alert('Akses Ditolak! Anda bukan $level_akses'); window.location='login.php';</script>";
        exit();
    }
}
?>
