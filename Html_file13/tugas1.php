<html>
  <head>
    <title>Form Input</title>
  </head>
  <body>
    <form action="Proses_Input_Text.php" method="post" name="input">
      Sahabat-sahabat Dekatku<br>
      <input type="text" name="nama1"><br>
      <input type="text" name="nama2"><br>
      <input type="text" name="nama3"><br>
      <input type="text" name="nama4"><br>
      <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["Input"])) {
      $nama1 = $_POST["nama1"];
      $nama2 = $_POST["nama2"];
      $nama3 = $_POST["nama3"];
      $nama4 = $_POST["nama4"];

      echo "Sahabat-sahabat Dekatku: <br>";
      echo "1. " . $nama1 . "<br>";
      echo "2. " . $nama2 . "<br>";
      echo "3. " . $nama3 . "<br>";
      echo "4. " . $nama4 . "<br>";
    }
    ?>
  </body>
</html>