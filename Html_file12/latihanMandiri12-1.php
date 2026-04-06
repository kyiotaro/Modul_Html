<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Control IF (PHP)</title>
</head>

<body>
  <?php
    $angka = 2;
    while ($angka <= 100) {
      echo "$angka ";
      if ($angka % 10 == 0) {
        echo "<br>";
      }
      $angka+=2;
    }
  ?>
</body>

</html>