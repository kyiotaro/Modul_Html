<?php
  $a = 3;
  $b = 5;

  echo "<h1>Operator Perbandingan & Logika</h1><hr>";

  echo "a: $a<br>";
  echo "b: $b<br>";

  echo "<h2>Operator Perbandingan</h2><br>";
  echo "a == b: " . ($a == $b ? "kondisi benar" : "kondisi salah") . "<br>";
  echo "a != b: " . ($a != $b ? "kondisi benar" : "kondisi salah") ."<br>";
  echo "a < b: " . ($a < $b ? "kondisi benar" : "kondisi salah") . "<br>";
  echo "a > b: " . ($a > $b ? "kondisi benar" : "kondisi salah") . "<br>";
  echo "a <= b: " . ($a <= $b ? "kondisi benar" : "kondisi salah") . "<br>";
  echo "a >= b: " . ($a >= $b ? "kondisi benar" : "kondisi salah") . "<br>";

  echo "<h2>Operator Logika</h2><br>";
  echo "a < 5 AND b > 3: " . (($a < 5) && ($b > 3) ? "kondisi benar" : "kondisi salah") . "<br>";
  echo "a < 5 OR b < 3: " . (($a < 5) || ($b < 3) ? "kondisi benar" : "kondisi salah") . "<br>";

?>