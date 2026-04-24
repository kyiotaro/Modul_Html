<?php
  if (!isset($_SESSION["username"]))
  {
    echo "anda belum login";
    exit;
  }
?>