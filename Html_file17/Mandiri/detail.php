<?php 
include 'cek.php';
include 'koneksi.php';

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
    <title><?= $row['title']; ?> - Detail Berita</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="../uploads/<?= $row['image']; ?>" class="card-image" alt="<?= $row['title']; ?>">
            <div class="card-body">
                <h1><?= $row['title']; ?></h1>
                <p class="card-meta">Oleh: <?= $row['author']; ?> | <?= $row['date']; ?></p>
                <hr>
                <div class="card-text">
                    <?= nl2br($row['content']); ?>
                </div>
            </div>
            <div class="card-footer">
                <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
                <?php if($_SESSION['level'] == 'admin'): ?>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>