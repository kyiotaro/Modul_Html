<?php
include "../koneksi.php";
$nis = $_GET['nis'];
$query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>
<html>
<head>
    <title>Detail Pendaftar</title>
</head>
<body>
    <center>
        <h2>Detail Pendaftar Ekstrakurikuler</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr><td>NIS</td><td><?php echo $data['nis']; ?></td></tr>
            <tr><td>Nama</td><td><?php echo $data['nama']; ?></td></tr>
            <tr><td>Kelas</td><td><?php echo $data['kelas']; ?></td></tr>
            <tr><td>TTL</td><td><?php echo $data['ttl']; ?></td></tr>
            <tr><td>Alamat</td><td><?php echo $data['alamat']; ?></td></tr>
            <tr><td>Kota</td><td><?php echo $data['kota']; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?php echo ($data['jk'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></td></tr>
            <tr><td>Hobby</td><td><?php echo $data['hobi']; ?></td></tr>
            <tr><td>Ekskul</td><td><?php echo $data['ekskul']; ?></td></tr>
        </table>
        <br>
        <a href="tampil_tugas.php">Kembali ke Daftar</a>
    </center>
</body>
</html>
