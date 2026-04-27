<?php
$level_akses = "user";
include "cek.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Pendaftaran Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Ekskul User</a>
            <div class="ms-auto text-white">
                Halo, <b><?php echo $_SESSION['username']; ?></b> (User) | 
                <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h2>Daftar Pendaftar Ekstrakurikuler</h2>
            <p class="text-muted">Mode: View Only (Hanya Lihat)</p>
        </div>

        <div class="table-responsive shadow-sm bg-white p-3 rounded">
            <table class="table table-striped table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Ekstrakurikuler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tb_siswa";
                    $result = mysqli_query($conn, $query);
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nis']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['ekskul']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
