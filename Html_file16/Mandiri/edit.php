<?php
$level_akses = "admin";
include "cek.php";
include "koneksi.php";

$nis = $_GET['nis'];
$query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='admin.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftar - Ekskul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Form Edit Pendaftar</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="POST">
                            <input type="hidden" name="nis_lama" value="<?php echo $data['nis']; ?>">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ekstrakurikuler</label>
                                <select name="ekskul" class="form-select" required>
                                    <option value="Pramuka" <?php if($data['ekskul'] == 'Pramuka') echo 'selected'; ?>>Pramuka</option>
                                    <option value="PMR" <?php if($data['ekskul'] == 'PMR') echo 'selected'; ?>>PMR</option>
                                    <option value="Basket" <?php if($data['ekskul'] == 'Basket') echo 'selected'; ?>>Basket</option>
                                    <option value="Futsal" <?php if($data['ekskul'] == 'Futsal') echo 'selected'; ?>>Futsal</option>
                                    <option value="Coding" <?php if($data['ekskul'] == 'Coding') echo 'selected'; ?>>Coding</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="admin.php" class="btn btn-secondary">Kembali</a>
                                <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
