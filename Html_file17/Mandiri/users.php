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
        h2 {
            font-size: 28px;
            margin-bottom: 30px;
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
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        thead {
            background-color: #343a40;
            color: white;
        }
        th {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #ddd;
        }
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f0f0f0;
        }
        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-primary {
            background-color: #007bff;
            color: white;
        }
        .badge-secondary {
            background-color: #6c757d;
            color: white;
        }
        .text-muted {
            color: #6c757d;
            font-size: 12px;
        }
    </style>
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