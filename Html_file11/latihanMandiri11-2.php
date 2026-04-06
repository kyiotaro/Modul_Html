<?php
  $sisi = 10;
  $sisi2 = 21;
  $sisiMiring = sqrt(pow($sisi, 2) + pow($sisi2, 2));
  $JariJari = 13;
  $diameter = 20;
  $alas = 8;
  $tinggi = 12;
  const PHI = 3.14;

  $LuasSegitigaSikuSiku = 0.5 * $alas * $tinggi;
  $KelilingSegitigaSikuSiku = $sisi + $sisi2 + $sisiMiring;

  $LuasPersegi = pow($sisi, 2);
  $KelilingPersegi = 4 * $sisi;

  $LuasPersegiPanjang = $sisi * $sisi2;
  $KelilingPersegiPanjang = 2 * ($sisi + $sisi2);

  $LuasLingkaran = PHI * pow($JariJari, 2);
  $KelilingLingkaran = PHI * $diameter;

  echo "<h1>Perhitungan Luas dan Keliling</h1><hr>";
  echo "<h2>Segitiga Siku-Siku</h2>";
  echo "Luas Segitiga Siku-Siku: $LuasSegitigaSikuSiku<br>";
  echo "Keliling Segitiga Siku-Siku: $KelilingSegitigaSikuSiku<br><hr>";
  echo "<h2>Persegi</h2>";  
  echo "Luas Persegi: $LuasPersegi<br>";
  echo "Keliling Persegi: $KelilingPersegi<br><hr>";
  echo "<h2>Persegi Panjang</h2>";
  echo "Luas Persegi Panjang: $LuasPersegiPanjang<br>";
  echo "Keliling Persegi Panjang: $KelilingPersegiPanjang<br><hr>";
  echo "<h2>Lingkaran</h2>";
  echo "Luas Lingkaran: $LuasLingkaran<br>";
  echo "Keliling Lingkaran: $KelilingLingkaran<br>";
?>