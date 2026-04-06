<?php
  echo "<h1>Operator Assignment</h1><hr>";
  $x = 10;//nilai awal
  echo "Nilai awal x: $x<br>";
  //Penjumlahan
  $a = $x;
  $a += 5;//x = x + 5
  echo "Setelah penjumlahan (x += 5): $a<br>";
  //Pengurangan
  $b = $x;
  $b -= 3;//x = x - 3
  echo "Setelah pengurangan (x -= 3): $b<br>";
  //Perkalian
  $c = $x;
  $c *= 2;//x = x * 2
  echo "Setelah perkalian (x *= 2): $c<br>";
  //Pembagian
  $d = $x;
  $d /= 2;//x = x / 2
  echo "Setelah pembagian (x /= 2): $d<br>";
  //Modulus (sisa bagi)
  $e = $x;
  $e %= 3;//x = x % 3
  echo "Setelah modulus (x %= 3): $e<br>";
  //Pangkat (PHP 5.6 ke atas)
  $f = $x;
  $f **= 2;//x = x ** 2
  echo "Setelah pangkat (x **= 2): $f<br>";
  //Penggabungan string
  $teks = "Belajar ";;
  $teks .= " PHP";
  echo "Setelah penggabungan string: $teks<br>";

?>