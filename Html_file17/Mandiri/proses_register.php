<?php
include 'koneksi.php';

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
$confirm_password = $conn->real_escape_string($_POST['confirm_password']);

if ($password !== $confirm_password) {
    echo "<script>alert('Konfirmasi password tidak cocok!'); window.location.href='register.php';</script>";
    exit();
}

$check_user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if (!$check_user) die("Error: " . $conn->error);
if (mysqli_num_rows($check_user) > 0) {
    echo "<script>alert('Username sudah terdaftar!'); window.location.href='register.php';</script>";
    exit();
}

$level = 'user';

$query = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
} else {
    die("Error: " . $conn->error);
}
?>