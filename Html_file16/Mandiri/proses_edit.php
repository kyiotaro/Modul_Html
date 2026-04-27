<?php
$level_akses = "admin";
include "cek.php";
include "koneksi.php";

if (isset($_POST['update'])) {
    $nis_lama = $_POST['nis_lama'];
    $nis      = $_POST['nis'];
    $nama     = $_POST['nama'];
    $kelas    = $_POST['kelas'];
    $ekskul   = $_POST['ekskul'];

    $query = "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', ekskul='$ekskul' WHERE nis='$nis_lama'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data!'); window.location='edit.php?nis=$nis_lama';</script>";
    }
}
?>
