<?php
session_start();
// hapus semua data session
session_unset();
// hancurkan session
session_destroy();

echo "Anda Sudah Logout <br>";
echo "<a href='login.php'>Login Kembali</a>";

// header("Location: login.php");
exit();
?>
