<?php
$level_akses = "admin";
include "cek.php";
include "koneksi.php";

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $query = "DELETE FROM tb_siswa WHERE nis='$nis'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='admin.php';</script>";
    }
} else {
    header("Location: admin.php");
}
?>
