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