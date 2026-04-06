<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Control IF (PHP)</title>
</head>

<body>
  <?php
  $nilai = "89";
  switch ($nilai)
  {
    case ($nilai >= 86 && $nilai <= 100):
      echo"Nilai : A";
      echo"<br>";
      echo"Keterangan : Sangat Baik";
      break;
    case ($nilai >= 76 && $nilai <= 85):
      echo"Nilai : B";
      echo"<br>";
      echo"Keterangan : Baik";
      break;
    case ($nilai >= 66 && $nilai <= 75):
      echo"Nilai : C";
      echo"<br>";
      echo"Keterangan : Cukup";
      break;
    default:
      echo"Nilai : D";
      echo"<br>";
      echo"Keterangan : Kurang";
  }
  ?>
</body>

</html>