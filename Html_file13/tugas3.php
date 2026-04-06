<html>
  <head>
    <title>Radio button form</title>
  </head>
  <body>
    <form action="" method="post" name="input">
      <h2>Pilih Jurusan Anda</h2>
      <input type="radio" name="jurusan" value="RPL"> Rekayasa Perangkat Lunak<br>
      <input type="radio" name="jurusan" value="TKJ"> Teknik Komputer dan Jaringan<br>
      <input type="radio" name="jurusan" value="DKV"> Desain Komunikasi Visual<br>
      <input type="radio" name="jurusan" value="ANM"> Animasi<br>
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