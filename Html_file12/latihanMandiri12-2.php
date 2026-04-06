<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Control IF (PHP)</title>
</head>

<body>
  <?php
    $bayar = 125000;
    if ($bayar >= 50000) {
      $diskon = 5/100;
    }
    elseif ($bayar >= 100000) {
      $diskon = 10/100;
    }
    elseif ($bayar >= 500000) {
      $diskon = 50/100;
    }
    else {
      $diskon = 0;
    }
    $total = $bayar - ($bayar * $diskon);
    echo "Bayar : $bayar <br>";
    echo "Diskon : " . ($diskon * 100) . "% <br>";
    echo "Total Bayar : $total";
  ?>
</body>

</html>