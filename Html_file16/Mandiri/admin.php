<?php
$level_akses = "admin";
include "cek.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Pendaftaran Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Ekskul Admin</a>
            <div class="ms-auto text-white">
                Halo, <b><?php echo $_SESSION['username']; ?></b> (Admin) | 
                <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Pendaftar Ekstrakurikuler</h2>
            <a href="tambah.php" class="btn btn-success">Tambah Pendaftar</a>
        </div>

        <div class="table-responsive shadow-sm bg-white p-3 rounded">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Ekstrakurikuler</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tb_siswa";
                    $result = mysqli_query($conn, $query);
                    
                    if (!$result) {
                        echo "<tr><td colspan='6' class='text-center text-danger'>Error: Tabel 'tb_siswa' tidak ditemukan di database '$db'.<br>Silakan buat tabel tersebut terlebih dahulu.</td></tr>";
                    } else {
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nis']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['ekskul']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?nis=<?php echo $data['nis']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="hapus.php?nis=<?php echo $data['nis']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        } 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
