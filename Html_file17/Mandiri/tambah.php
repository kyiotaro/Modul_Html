<?php 
include 'cek.php';
if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita - News Portal</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Berita Baru</h4>
            </div>
            <div class="card-body">
                <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" required>
                    </div>
                    <div class="form-group">
                        <label>Konten</label>
                        <textarea name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="image" required>
                        <small>Format: jpg, jpeg, png, gif. Max 2MB.</small>
                    </div>
                    <div class="button-group">
                        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit">Simpan Berita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>