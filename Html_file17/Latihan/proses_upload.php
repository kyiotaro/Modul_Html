<?php
  include "koneksi.php";
  $judul = $conn->real_escape_string($_POST['judul']);
  $konten = $conn->real_escape_string($_POST['konten']);
  $author = $conn->real_escape_string($_POST['author']);

  $image = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];

  if ($error !== UPLOAD_ERR_OK) {
    die("Gagal mengunggah gambar. Kode error: $error");
  }

  $image_baru = time() . "_" . basename($image);
  $uploadDir = dirname(__DIR__) . '/uploads/';
  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
  }
  $target = $uploadDir . $image_baru;

  $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
  $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

  if(!in_array($ext, $allowed_ext)) {
    die("Format gambar tidak valid!");
  }

  if (move_uploaded_file($tmp, $target)) {
    $sql = "INSERT INTO news (title, content, author, image) VALUES ('$judul', '$konten', '$author', '$image_baru')";
    if ($conn->query($sql) === TRUE) {
      echo "Berita berhasil ditambahkan!";
    } else {
      die("Error: " . $conn->error);
    }
  } else {
    echo "Gagal mengunggah gambar.";
  }
  
?>