<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kode_matakuliah = $_POST['kd_matkul'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks=$_POST['sks'];
// update data ke database
mysqli_query($koneksi,"update tbl_matkul set nama_matakuliah='$nama_matakuliah',sks='$sks' where kd_dosen='$kode_matakuliah'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>