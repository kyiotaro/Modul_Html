<?php
include "../koneksi.php";
$nis = $_GET['nis'];
$query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);


$ttl_parts = explode("-", $data['ttl']);
$thn = $ttl_parts[0];
$bln = $ttl_parts[1];
$tgl = $ttl_parts[2];


$hobi_arr = explode(", ", $data['hobi']);
$ekskul_arr = explode(", ", $data['ekskul']);
?>
<html>
<head>
    <title>Edit Pendaftaran Ekstrakurikuler</title>
</head>
<body>
    <table border="1" align="center" cellpadding="20" cellspacing="0">
        <tr>
            <td>
                <center>
                    <font size="5" color="purple" face="Times New Roman"><b>Edit Pendaftaran Ekstrakurikuler</b></font>
                </center>
                <hr color="black" size="1">
                
                <form action="proses_update_tugas.php" method="post">
                    <table border="0" cellpadding="5" cellspacing="0">
                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nis" size="30" value="<?php echo $data['nis']; ?>" readonly> 
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" size="60" value="<?php echo $data['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>
                                <select name="kelas">
                                    <option value="X" <?php if($data['kelas']=="X") echo "selected"; ?>>X</option>
                                    <option value="XI" <?php if($data['kelas']=="XI") echo "selected"; ?>>XI</option>
                                    <option value="XII" <?php if($data['kelas']=="XII") echo "selected"; ?>>XII</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tgl Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tgl" size="5" value="<?php echo $tgl; ?>"> / 
                                <input type="text" name="bln" size="15" value="<?php echo $bln; ?>"> / 
                                <input type="text" name="thn" size="10" value="<?php echo $thn; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Alamat</td>
                            <td valign="top">:</td>
                            <td>
                                <textarea name="alamat" cols="45" rows="3"><?php echo $data['alamat']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>:</td>
                            <td><input type="text" name="kota" size="25" value="<?php echo $data['kota']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jk" value="L" <?php if($data['jk']=="L") echo "checked"; ?>> Laki-Laki
                                <input type="radio" name="jk" value="P" <?php if($data['jk']=="P") echo "checked"; ?>> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Hobby</td>
                            <td valign="top">:</td>
                            <td>
                                <input type="checkbox" name="hobby[]" value="Membaca" <?php if(in_array("Membaca", $hobi_arr)) echo "checked"; ?>> Membaca <br>
                                <input type="checkbox" name="hobby[]" value="Olahraga" <?php if(in_array("Olahraga", $hobi_arr)) echo "checked"; ?>> Olahraga <br>
                                <input type="checkbox" name="hobby[]" value="Menyanyi" <?php if(in_array("Menyanyi", $hobi_arr)) echo "checked"; ?>> Menyanyi <br>
                                <input type="checkbox" name="hobby[]" value="Menari" <?php if(in_array("Menari", $hobi_arr)) echo "checked"; ?>> Menari <br>
                                <input type="checkbox" name="hobby[]" value="Traveling" <?php if(in_array("Traveling", $hobi_arr)) echo "checked"; ?>> Traveling
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Pilihan Ekskul</td>
                            <td valign="top">:</td>
                            <td>
                                <select name="ekskul[]" multiple size="7">
                                    <option value="Pramuka" <?php if(in_array("Pramuka", $ekskul_arr)) echo "selected"; ?>>Pramuka</option>
                                    <option value="Basket" <?php if(in_array("Basket", $ekskul_arr)) echo "selected"; ?>>Basket</option>
                                    <option value="Volly" <?php if(in_array("Volly", $ekskul_arr)) echo "selected"; ?>>Volly</option>
                                    <option value="Band" <?php if(in_array("Band", $ekskul_arr)) echo "selected"; ?>>Band</option>
                                    <option value="Seni Tari" <?php if(in_array("Seni Tari", $ekskul_arr)) echo "selected"; ?>>Seni Tari</option>
                                    <option value="Robotic" <?php if(in_array("Robotic", $ekskul_arr)) echo "selected"; ?>>Robotic</option>
                                    <option value="Bulu Tangkis" <?php if(in_array("Bulu Tangkis", $ekskul_arr)) echo "selected"; ?>>Bulu Tangkis</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" name="update_reg" value="Update">
                                <a href="tampil_tugas.php">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
