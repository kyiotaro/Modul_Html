<?php
$level_akses = "admin";
include "cek.php";
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $ekskul = $_POST['ekskul'];

    $query = "INSERT INTO tb_siswa (nis, nama, kelas, ekskul) VALUES ('$nis', '$nama', '$kelas', '$ekskul')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data!'); window.location='tambah.php';</script>";
    }
}
?>
