<?php 
include 'cek.php';
include 'koneksi.php';

if($_SESSION['level'] != 'admin') {
    header("Location: dashboard.php");
    exit;
}

$id = $conn->real_escape_string($_POST['id']);
$title = $conn->real_escape_string($_POST['title']);
$author = $conn->real_escape_string($_POST['author']);
$content = $conn->real_escape_string($_POST['content']);

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if($image != "") {
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    if(!in_array($ext, $allowed_ext)) {
        die("Format gambar tidak valid!");
    }

    $image_baru = time() . "_" . $image;
    $target = "../uploads/" . $image_baru;

    if (move_uploaded_file($tmp, $target)) {
        $query = mysqli_query($conn, "SELECT image FROM news WHERE id=$id");
        if (!$query) die("Error: " . $conn->error);
        $data = mysqli_fetch_assoc($query);
        if(file_exists("../uploads/" . $data['image'])) {
            unlink("../uploads/" . $data['image']);
        }

        $sql = "UPDATE news SET title='$title', content='$content', author='$author', image='$image_baru' WHERE id=$id";
    } else {
        die("Gagal mengunggah gambar.");
    }
} else {
    $sql = "UPDATE news SET title='$title', content='$content', author='$author' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.php");
} else {
    die("Error: " . $conn->error);
}
?>