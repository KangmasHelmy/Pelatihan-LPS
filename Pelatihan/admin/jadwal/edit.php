<html>
<head>
<title>Edit Data Dosen</title>
</head>
<body>
<h2>Edit Data Dosen</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
 <br/>
<h3>EDIT DATA DOSEN</h3>
<?php
include '../../koneksi.php';
$kd_dosen = $_GET['kd_dosen'];
$kd_matkul = $_GET['kd_matkul'];
$waktu = $_GET['waktu'];
$ruang = $_GET['ruang'];
$data = mysqli_query($koneksi,"select * from v_jadwal where kd_dosen='$kd_dosen' and kd_matkul='$kd_matkul' and waktu='$waktu' and ruang='$ruang'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
    <tr>
        <td>matkul</td><td><input type="text" name="matkul" value="<?php echo $d['nama_matkul']; ?>"></td>
    </tr>
    <tr>
        <td>dosen</td><td><input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>"></td>
    </tr>
    <tr>
        <td>ruang</td><td><input type="text" name="ruang" value="<?php echo $d['ruang']; ?>"></td>
    </tr>
    <tr>
        <td>waktu</td><td><input type="text" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
    </tr>
    <td>
        <input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>">
        <input type="hidden" name="kd_dosen" value="<?php echo $d['kd_matkul']; ?>">
        <input type="hidden" name="kd_dosen" value="<?php echo $d['id']; ?>">          
    </td>
</tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>