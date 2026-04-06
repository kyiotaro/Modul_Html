<html>
<head>
    <title>login</title>
</head>
<body>
    <form action="" method="post" name="input">
        <h2>Login Here...</h2>
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" name="Login" value="Login">
        <input type="reset" name="Reset" value="Reset">
    </form>
    <?php
      if (isset($_POST["Login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "smkn4malang" && $password == "123") {
          echo "Login Berhasil!";
        } else {
          echo "Login Gagal!";
        }
      }
    ?>
</body>
</html>