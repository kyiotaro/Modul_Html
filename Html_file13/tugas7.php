<html>
  <head>
    <title>Listbox Form</title>
  </head>
  <body>
    <form action="" method="post" name="input">
      <h2>Pilih warna favorit Anda</h2>
      <select name="warna">
        <option value="merah">Merah</option>
        <option value="biru">Biru</option>
        <option value="hijau">Hijau</option>
        <option value="kuning">Kuning</option>
      </select><br><br>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php
      if (isset($_POST["Submit"])) {
        $warna = $_POST["warna"];
        echo "Warna favorit Anda adalah: " . $warna;
      }
    ?>
  </body>
</html>