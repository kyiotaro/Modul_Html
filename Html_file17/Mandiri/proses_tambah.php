<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$title = $conn->real_escape_string($_POST['title']);
$author = $conn->real_escape_string($_POST['author']);
$content = $conn->real_escape_string($_POST['content']);

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

if(!in_array($ext, $allowed_ext)) {
    die("Format gambar tidak valid!");
}

if($size > 2000000) {
    die("Ukuran file terlalu besar! Maksimal 2MB.");
}

$image_baru = time() . "_" . $image;
$target = "../uploads/" . $image_baru;

if (move_uploaded_file($tmp, $target)) {
    $sql = "INSERT INTO news (title, content, author, image) VALUES ('$title', '$content', '$author', '$image_baru')";
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        die("Error: " . $conn->error);
    }
} else {
    echo "Gagal mengunggah gambar.";
}
?>