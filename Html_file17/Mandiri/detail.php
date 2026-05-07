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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 30px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            background-color: white;
        }
        .card-image {
            width: 100%;
            height: auto;
            display: block;
        }
        .card-body {
            padding: 30px;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 15px;
            color: #333;
        }
        .card-meta {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 20px;
        }
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }
        .card-text {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
        }
        .card-footer {
            padding: 20px 30px;
            background-color: #f9f9f9;
            text-align: center;
            border-top: 1px solid #ddd;
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>
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