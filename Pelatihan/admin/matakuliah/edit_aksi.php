<?php
include '../../koneksi.php';
$kode_matakuliah = $_POST['kd_matkul'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks=$_POST['sks'];
mysqli_query($koneksi,"update tbl_matkul set nama_matakuliah='$nama_matakuliah',sks='$sks' where kd_dosen='$kode_matakuliah'");
header("location:index.php");
?>