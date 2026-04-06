<?php
  $nis = "12345";
  $namaSiswa = "Budi";
  $nilaiTugas = 85;
  $nilaiUTS = 90;
  $nilaiUAS = 88;

  $totalNilai = $nilaiTugas + $nilaiUTS + $nilaiUAS;
  $rataRata = $totalNilai / 3;

  echo "<table border='1' cellpadding='5' cellspacing='0'>";
  echo "<tr><th>NIS</th><th>Nama Siswa</th><th>Nilai Tugas</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Total Nilai</th><th>Rata-rata</th></tr>";
  echo "<tr><td>$nis</td><td>$namaSiswa</td><td>$nilaiTugas</td><td>$nilaiUTS</td><td>$nilaiUAS</td><td>$totalNilai</td><td>" . number_format($rataRata, 2) . "</td></tr>";
  echo "</table>";
?>