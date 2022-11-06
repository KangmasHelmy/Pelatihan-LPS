<!DOCTYPE html>
<html>
<head>
<title>Data Jadwal</title>
</head>
<body>
<h2>Data Jadwal</h2>
<br/>
<a href="tambah.php">+ TAMBAH Jadwal</a>
<br>
<table border="1">
<tr>
<th>NO</th>
<th>Matakuliah</th>
<th>Nama Dosen</th>
<th>Waktu</th>
<th>Ruang</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from v_jadwal");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_matkul']; ?></td>
    <td><?php echo $d['nama_dosen']; ?></td>
    <td><?php echo $d['waktu']; ?></td>
    <td><?php echo $d['ruang']; ?></td>

    <td>
        <a href="edit.php?kd_dosen=<?php echo $d['kd_dosen']; ?>&kd_matkul=<?php echo $d['kd_matkul']; ?>&waktu=<?php echo $d['waktu']; ?>&ruang=<?php echo $d['ruang']; ?>">EDIT</a>
        <a href="hapus.php?kd_dosen=<?php echo $d['kd_dosen']; ?>&kd_matkul=<?php echo $d['kd_matkul']; ?>&waktu=<?php echo $d['waktu']; ?>&ruang=<?php echo $d['ruang']; ?>">HAPUS</a>
    </td>
</tr>
<?php
}
?>
</table>
<br/>
<a href="../index.php">Back To Main Menu</a><br>
<a href="../logout.php">LOGOUT</a>
</body>
</html>