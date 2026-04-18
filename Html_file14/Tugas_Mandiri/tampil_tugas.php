<html>
<head>
    <title>Daftar Pendaftar Ekstrakurikuler</title>
</head>
<body>
    <center>
        <h2>Daftar Pendaftar Ekstrakurikuler</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Ekskul</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "../koneksi.php";
            $query = "SELECT * FROM tb_siswa";
            $hasil = mysqli_query($koneksi, $query);
            $no = 1;
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nis']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['ekskul']; ?></td>
                    <td>
                        <a href="detail_tugas.php?nis=<?php echo $data['nis']; ?>">Detail</a> | 
                        <a href="form_update_tugas.php?nis=<?php echo $data['nis']; ?>">Edit</a> | 
                        <a href="delete_tugas.php?nis=<?php echo $data['nis']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <a href="tugas_mandiri.php">Tambah Pendaftar Baru</a>
    </center>
</body>
</html>
