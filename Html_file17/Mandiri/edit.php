<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$id = $conn->real_escape_string($_GET['id']);
$sql = "SELECT * FROM news WHERE id = $id";
$result = $conn->query($sql);
if (!$result) die("Error: " . $conn->error);
$row = $result->fetch_assoc();

if(!$row) {
    echo "Berita tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita - News Portal</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Edit Berita</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="title" value="<?= $row['title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" value="<?= $row['author']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Konten</label>
                        <textarea name="content" required><?= $row['content']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Saat Ini</label>
                        <div class="current-image">
                            <img src="../uploads/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </div>
                        <label>Ganti Gambar (Kosongkan jika tidak ingin ganti)</label>
                        <input type="file" name="image">
                        <small>Format: jpg, jpeg, png, gif. Max 2MB.</small>
                    </div>
                    <div class="button-group">
                        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit">Update Berita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>