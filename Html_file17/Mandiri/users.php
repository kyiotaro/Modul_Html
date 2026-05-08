<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$sql = "SELECT * FROM users ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen User - News Portal</title>
</head>
<body>
    <nav>
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">News Portal</a>
            <div class="navbar-nav">
                <a class="nav-link" href="dashboard.php">Berita</a>
                <a class="nav-link active" href="users.php">Manajemen User</a>
                <span class="nav-link">Halo, <?= $_SESSION['username']; ?></span>
                <a class="nav-link btn-logout" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Daftar User Terdaftar</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Level Access</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td>
                        <span class="badge <?= $row['level'] == 'admin' ? 'badge-primary' : 'badge-secondary' ?>">
                            <?= strtoupper($row['level']); ?>
                        </span>
                    </td>
                    <td>
                        <?php if($row['username'] != $_SESSION['username']): ?>
                            <a href="hapus_user.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus user ini?')">Hapus</a>
                        <?php else: ?>
                            <span class="text-muted">Current User</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
    </div>
</body>
</html>