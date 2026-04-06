<html>
  <head>
    <title>Combobox Form</title>
  </head>
  <body>
    <form action="" method="post" name="input">
      <h2>Pilih Jurusan Anda</h2>
      <select name="jurusan">
        <option value="RPL">Rekayasa Perangkat Lunak</option>
        <option value="TKJ">Teknik Komputer dan Jaringan</option>
        <option value="DKV">Desain Komunikasi Visual</option>
        <option value="ANM">Animasi</option>
      </select>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php
      if (isset($_POST["Submit"])) {
        $jurusan = $_POST["jurusan"];
        echo "Jurusan yang Anda pilih adalah: " . $jurusan;
      }
    ?>
  </body>
</html>