<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Dummy data login
$user_benar = "admin";
$pass_benar = "123";

if ($username == $user_benar && $password == $pass_benar) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: biodata.php");
} else {
    echo "<script>alert('Login Gagal! Username atau Password salah.'); window.location='login.php';</script>";
}
?>
