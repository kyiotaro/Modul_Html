<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$id = $conn->real_escape_string($_GET['id']);

$query = mysqli_query($conn, "SELECT username FROM users WHERE id=$id");
if (!$query) die("Error: " . $conn->error);
$data = mysqli_fetch_assoc($query);

if($data['username'] == $_SESSION['username']) {
    echo "<script>alert('Anda tidak bisa menghapus akun anda sendiri!'); window.location.href='users.php';</script>";
} else {
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
    } else {
        die("Error: " . $conn->error);
    }
}
?>