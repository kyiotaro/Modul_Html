<?php 
session_start();
include 'koneksi.php';

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (!$login) die("Error: " . $conn->error);
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $data['level'];
    header("Location: dashboard.php");
} else {
    header("Location: login.php?pesan=gagal");
}
?>