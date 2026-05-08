<!DOCTYPE html>
<html>
<head>
    <title>Register - News Portal</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Akun Baru</h4>
            </div>
            <div class="card-body">
                <form action="proses_register.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Pilih username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Buat password" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="confirm_password" placeholder="Ulangi password" required>
                    </div>
                    <button type="submit" class="btn-success">Daftar Sekarang</button>
                    <a href="login.php" class="btn btn-secondary">Sudah punya akun? Login</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>