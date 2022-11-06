<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kode_matakuliah = $_POST['kode_matakuliah'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks=$_POST['sks'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_matkul values('$kode_matakuliah','$nama_matakuliah','$sks')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>