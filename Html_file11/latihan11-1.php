<?php
  echo "<h1>Variabel dan Tipe Data</h1><br>";
  $a = 5;//integer
  $b = 2.5;//float
  $komentar = "Selamat Datang di Pemrograman Web";//string
  $status = true;//boolean
  $buah = array("apel", "jeruk", "mangga");//array
  $kosong = null;//null

  //menampilka dengan echo
  echo "Nilai a: $a<br>";
  echo "Nilai b: $b<br>";
  echo "Komentar: $komentar<br>";
  echo "<hr>";
  //menampilkan Boolean
  echo "Status: ";
  var_dump($status);
  echo "<br><br>";
  //menampilkan array
  echo "Buah: ";
  echo "<pre>";
  print_r($buah);
  echo "</pre>";
  //menampilkan null
  echo "kosong: ";
  var_dump($kosong);
?>