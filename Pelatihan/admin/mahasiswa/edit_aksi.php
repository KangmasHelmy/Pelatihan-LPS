<?php
include '../../koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];
mysqli_query($koneksi,"update tbl_mahasiswa set nama='$nama',jurusan='$jurusan',alamat='$alamat' where nim='$nim'");
header("location:index.php");
?>