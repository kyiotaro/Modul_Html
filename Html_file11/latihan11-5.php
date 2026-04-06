<?php
  echo"<h1>Konstanta</h1>";

  //Menggunakan define() untuk mendefinisikan konstanta
  define("Sekolah", "SMK Negeri 4");

  //Menggunakan const untuk mendefinisikan konstanta (PHP 5.3 ke atas)
  const Kelas ="X RPL C";

  echo " Sekolah: " . Sekolah;
  echo " Kelas: " . Kelas; 
?>