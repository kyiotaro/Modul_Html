<html>
  <head>
    <title>Checkbox Form</title>
  </head>
  <body>
    <form action="" method="post" name="input">
      <h2>Pilih warna favorit Anda</h2>
      <input type="checkbox" name="color[]" value="Red"> Red<br>
      <input type="checkbox" name="color[]" value="Green"> Green<br>
      <input type="checkbox" name="color[]" value="Blue"> Blue<br>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php
      if (isset($_POST["Submit"])) {
        $colors = $_POST["color"];
        echo "Warna favorit Anda adalah: " . implode(", ", $colors);
      }
    ?>
  </body>
</html>