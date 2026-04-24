<?php
  session_start();


  $username = $_POST["username"];
  $password = $_POST["password"];

  if($username == "admin" && $password == "123")
  {
    $_SESSION["username"] = $username;

    echo "<p>Selamat datang, ".$_SESSION["username"]."</p>";
    echo "<p>menu navigasi</p>";
    echo "<p>
    <a href=hal1.php>Halaman 1</a><br>
    <a href=hal2.php>Halaman 2</a><br>
    <a href=hal3.php>Halaman 3</a>
    </p>";
  } else {
    echo"login gagal";
  }

?>