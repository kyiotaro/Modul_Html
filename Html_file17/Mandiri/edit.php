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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            width: 100%;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: #ffc107;
            color: black;
            padding: 20px;
        }
        .card-header h4 {
            margin: 0;
            font-size: 20px;
        }
        .card-body {
            padding: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        input:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.25);
        }
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        small {
            display: block;
            margin-top: 5px;
            color: #6c757d;
            font-size: 12px;
        }
        .current-image {
            margin-bottom: 15px;
        }
        .current-image img {
            max-width: 150px;
            border-radius: 4px;
            border: 1px solid #ddd;
            padding: 2px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 30px;
        }
        button,
        .btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s;
        }
        button {
            background-color: #ffc107;
            color: black;
        }
        button:hover {
            background-color: #e0a800;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
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