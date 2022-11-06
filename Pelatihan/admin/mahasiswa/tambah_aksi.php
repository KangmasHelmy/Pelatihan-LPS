<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"insert into tbl_mahasiswa values('$nim','$nama_mahasiswa','$jurusan','$alamat')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>