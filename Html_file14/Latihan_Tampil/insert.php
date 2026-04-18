<html>
<head>
  <title>Insert Data Siswa</title>
</head>
<body>
  <form method="POST" action="">
    <table border="1">
      <tr>
        <td>NIS</td>
        <td> : </td>
        <td><input type="text" name="nis"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="submit" name="submit" value="Submit">
          <input type="reset" name="reset" value="Reset">
        </td>
      </tr>
    </table>
  </form>

  <?php
  include "../koneksi.php";
  if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $query = "INSERT INTO tb_siswa (nis, nama) VALUES ('$nis', '$nama')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
      echo "Data berhasil disimpan <br>";
      echo "<a href='tampil.php'>Lihat Data</a>";
    }
  }
  ?>
</body>
</html>
