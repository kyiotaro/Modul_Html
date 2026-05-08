<!DOCTYPE html>
<html>
<head>
    <title>Login - News Portal</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Login News Portal</h4>
            </div>
            <div class="card-body">
                <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<div class='alert alert-danger'>Login gagal! Username atau password salah!</div>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<div class='alert alert-success'>Anda telah berhasil logout</div>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman ini</div>";
                        }
                    }
                ?>
                <form action="proses_login.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit">Login</button>
                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>