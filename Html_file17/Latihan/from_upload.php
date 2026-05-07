<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload berita</title>
</head>
<body>
  <h2>Tambah Berita</h2>
  <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
    Judul: <br>
    <input type="text" name="judul" required><br><br>
    Konten: <br>
    <textarea name="konten" rows="5" cols="30" required></textarea><br><br>
    Author: <br>
    <input type="text" name="author" required><br><br>
    Gambar: <br>
    <input type="file" name="image" required><br><br>

    <button type="submit" value="Upload">Upload</button>
  </form>
</body>
</html>