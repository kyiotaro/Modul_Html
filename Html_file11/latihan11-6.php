<?php
  echo "<h1>variasi Konversi Tipe Data</h1><hr><br>";
  //1. konversi Manual/Eksplisit casting
  $harga = "750.85 Rupiah";
  echo "<b>1. Konversi Manual/Eksplisit Casting</b><br>";
  echo "Data awal: $harga<br>";
  $harga_float = (float)$harga;//konversi string ke float
  echo "Setelah konversi ke float: $harga_float<br><br>";
  $harga_int = (int)$harga;//konversi string ke integer
  echo "Setelah konversi ke integer: $harga_int<br><br>";

  //2. konversi Otomatis/Implisit
  echo "<b>2. Konversi Otomatis/Implisit</b><br>";
  $angkaString = "10";
  $angkaInteger = 5;
  $hasil = $angkaString + $angkaInteger;//konversi otomatis dari string ke integer
  echo "String '10' + Integer 5 = $hasil (tipe data: " . gettype($hasil) . ")<br><br>";

  //3 Menggunakan Settype() untuk mengubah tipe data variabel
  echo "<b>3. Menggunakan Settype()</b><br>";
  $nilai = "100.50 rupiah";
  settype($nilai, "double");//mengubah nilai menjadi float
  echo "Setelah konversi ke double: $nilai<br><br>";
  settype($nilai, "integer");//mengubah nilai menjadi integer
  echo "Setelah konversi ke integer: $nilai<br><br>";
?>