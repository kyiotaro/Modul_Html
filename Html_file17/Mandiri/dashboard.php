<?php 
include 'cek.php';
include 'koneksi.php';

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - News Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        nav {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        .navbar-nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .nav-link:hover {
            background-color: #495057;
        }
        .nav-link.active {
            background-color: #007bff;
        }
        .nav-link.btn-logout {
            background-color: #dc3545;
            padding: 8px 15px;
        }
        .nav-link.btn-logout:hover {
            background-color: #c82333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        h2 {
            font-size: 28px;
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
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-info {
            background-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        thead {
            background-color: #343a40;
            color: white;
        }
        th {
            padding: 15px;
            text-align: left;
            font-weight: bold;
            text-align: center;
            border: 1px solid #ddd;
        }
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f0f0f0;
        }
        .text-center {
            text-align: center;
        }
        img {
            max-width: 80px;
            border-radius: 4px;
            border: 1px solid #ddd;
            padding: 2px;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
            justify-content: center;
        }
        .action-buttons .btn {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a class="navbar-brand" href="#">News Portal</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="dashboard.php">Berita</a>
                <?php if($_SESSION['level'] == 'admin'): ?>
                    <a class="nav-link" href="users.php">Manajemen User</a>
                <?php endif; ?>
                <span class="nav-link">Halo, <?= $_SESSION['username']; ?> (<?= $_SESSION['level']; ?>)</span>
                <a class="nav-link btn-logout" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="header-section">
            <h2>Daftar Berita</h2>
            <?php if($_SESSION['level'] == 'admin'): ?>
                <a href="tambah.php" class="btn btn-primary">+ Tambah Berita</a>
            <?php endif; ?>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                while($row = $result->fetch_assoc()): 
                ?>
                <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= substr(strip_tags($row['content']), 0, 100); ?>...</td>
                    <td><?= $row['author']; ?></td>
                    <td class="text-center">
                        <img src="../uploads/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                    </td>
                    <td><?= $row['date']; ?></td>
                    <td class="text-center">
                        <div class="action-buttons">
                            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <?php if($_SESSION['level'] == 'admin'): ?>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>