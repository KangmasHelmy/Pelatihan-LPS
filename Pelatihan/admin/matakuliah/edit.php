<html>
<head>
<title>Edit Data Matakuliah</title>
</head>
<body>
<h2>Edit Data Matakuliah</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA Matakuliah</h3>
<?php
include '../../koneksi.php';
$kode_matakuliah = $_GET['kd_matkul'];
$data = mysqli_query($koneksi,"select * from tbl_matkul where kd_matkul='$kode_matakuliah'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
    <tr>
        <td>Nama</td><td><input type="text" name="nama_matakuliah" value="<?php echo $d['nama']; ?>"></td>
    </tr>
    <tr>
        <td>sks</td><td><input type="text" name="sks" value="<?php echo $d['sks']; ?>"></td>
    </tr>
<td>
<input type="hidden" name="kd_matkul" value="<?php echo $d['kd_matkul']; ?>">


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