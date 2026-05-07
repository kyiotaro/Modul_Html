<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$id = $conn->real_escape_string($_GET['id']);

$query = mysqli_query($conn, "SELECT image FROM news WHERE id=$id");
if (!$query) die("Error: " . $conn->error);
$data = mysqli_fetch_assoc($query);

if($data) {
    if(file_exists("../uploads/" . $data['image'])) {
        unlink("../uploads/" . $data['image']);
    }

    $sql = "DELETE FROM news WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        die("Error: " . $conn->error);
    }
} else {
    header("Location: dashboard.php");
}
?>