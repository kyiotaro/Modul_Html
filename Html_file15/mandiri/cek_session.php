<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("Location: login.php");
    exit();
}
?>
