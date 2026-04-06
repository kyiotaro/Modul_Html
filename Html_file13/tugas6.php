<html>
  <head>
    <title>Textarea Form</title>
  </head>
  <body>
    <form action="" method="post" name="input">
      <h2>Masukkan komentar Anda</h2>
      <textarea name="komentar" rows="5" cols="40"></textarea><br>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php
      if (isset($_POST["Submit"])) {
        $komentar = $_POST["komentar"];
        echo "Komentar Anda adalah: " . $komentar;
      }
    ?>
  </body>
</html>