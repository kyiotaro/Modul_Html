<?php
// Logika sederhana untuk simulasi perpindahan halaman dalam satu file
$page = "login";

if (isset($_POST['kirim_login'])) {
    // Cek username dan password (berdasarkan screenshot username = aku)
    if ($_POST['username'] == "aku" && $_POST['password'] == "12345678") {
        $page = "form";
    } else {
        echo "<script>alert('Login Gagal! Gunakan username: aku dan password: 12345678');</script>";
        $page = "login";
    }
} elseif (isset($_POST['kirim_reg'])) {
    $page = "hasil";
}
?>
<html>
<head>
    <title>Tugas Mandiri - Ekstrakurikuler</title>
</head>
<body>

<?php if ($page == "login"): ?>
    <!-- HALAMAN LOGIN -->
    <font face="Arial">Halaman Login</font>
    <form action="" method="post">
        <table border="0" cellpadding="2">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td bgcolor="yellow"><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td bgcolor="yellow"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="kirim_login" value="KIRIM">
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($page == "form"): ?>
    <!-- HALAMAN FORM PENDAFTARAN -->
    <table border="1" align="center" cellpadding="20" cellspacing="0">
        <tr>
            <td>
                <center>
                    <font size="5" color="purple" face="Times New Roman"><b>Pendaftaran Ekstrakurikuler</b></font>
                </center>
                <hr color="black" size="1">
                
                <form action="" method="post">
                    <table border="0" cellpadding="5" cellspacing="0">
                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nis" size="30"> 
                                <font color="red">*</font>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" size="60"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>
                                <select name="kelas">
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tgl Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tgl" size="5" placeholder="Tgl"> / 
                                <input type="text" name="bln" size="15" placeholder="Bulan"> / 
                                <input type="text" name="thn" size="10" placeholder="Tahun">
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Alamat</td>
                            <td valign="top">:</td>
                            <td>
                                <textarea name="alamat" cols="45" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>:</td>
                            <td><input type="text" name="kota" size="25"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
                                <input type="radio" name="jk" value="Perempuan"> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Hobby</td>
                            <td valign="top">:</td>
                            <td>
                                <input type="checkbox" name="hobby[]" value="Membaca"> Membaca <br>
                                <input type="checkbox" name="hobby[]" value="Olahraga"> Olahraga <br>
                                <input type="checkbox" name="hobby[]" value="Menyanyi"> Menyanyi <br>
                                <input type="checkbox" name="hobby[]" value="Menari"> Menari <br>
                                <input type="checkbox" name="hobby[]" value="Traveling"> Traveling
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Pilihan Ekskul</td>
                            <td valign="top">:</td>
                            <td>
                                <select name="ekskul[]" multiple size="7">
                                    <option value="Pramuka">Pramuka</option>
                                    <option value="Basket">Basket</option>
                                    <option value="Volly">Volly</option>
                                    <option value="Band">Band</option>
                                    <option value="Seni Tari">Seni Tari</option>
                                    <option value="Robotic">Robotic</option>
                                    <option value="Bulu Tangkis">Bulu Tangkis</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" name="kirim_reg" value="Kirim">
                                <input type="reset" value="Cancel">
                            </td>
                        </tr>
                    </table>
                </form>
                <font color="red" size="2">* Harus Di isi</font>
            </td>
        </tr>
    </table>

<?php elseif ($page == "hasil"): ?>
    <!-- HALAMAN HASIL -->
    <center>
        <font size="5"><b>Hasil Pendaftaran Ekstrakurikuler</b></font>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr><td>NIS</td><td>: <?php echo $_POST['nis']; ?></td></tr>
            <tr><td>Nama</td><td>: <?php echo $_POST['nama']; ?></td></tr>
            <tr><td>Kelas</td><td>: <?php echo $_POST['kelas']; ?></td></tr>
            <tr><td>Tgl Lahir</td><td>: <?php echo $_POST['tgl'] . " " . $_POST['bln'] . " " . $_POST['thn']; ?></td></tr>
            <tr><td>Alamat</td><td>: <?php echo $_POST['alamat']; ?></td></tr>
            <tr><td>Kota</td><td>: <?php echo $_POST['kota']; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td>: <?php echo isset($_POST['jk']) ? $_POST['jk'] : "-"; ?></td></tr>
            <tr>
                <td>Hobby</td>
                <td>: <?php echo isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "-"; ?></td>
            </tr>
            <tr>
                <td>Pilihan Ekskul</td>
                <td>: <?php echo isset($_POST['ekskul']) ? implode(", ", $_POST['ekskul']) : "-"; ?></td>
            </tr>
        </table>
        <br>
        <a href="tugas_mandiri.php">Kembali ke Halaman Login</a>
    </center>
<?php endif; ?>

</body>
</html>
