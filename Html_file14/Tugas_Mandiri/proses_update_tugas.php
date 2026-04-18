<?php
include "../koneksi.php";

if (isset($_POST['update_reg'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['thn'] . "-" . $_POST['bln'] . "-" . $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jk = $_POST['jk'];
    $hobi = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "";
    $ekskul = isset($_POST['ekskul']) ? implode(", ", $_POST['ekskul']) : "";

    $query = "UPDATE tb_siswa SET 
                nama='$nama', 
                kelas='$kelas', 
                ttl='$ttl', 
                alamat='$alamat', 
                kota='$kota', 
                jk='$jk', 
                hobi='$hobi', 
                ekskul='$ekskul' 
              WHERE nis='$nis'";
    
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        header('location:tampil_tugas.php');
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
}
?>
