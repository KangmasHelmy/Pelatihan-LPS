<?php
// koneksi database
include '../../koneksi.php';
// menangkap data id yang di kirim dari url
$nim = $_GET['nim'];
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_dosen where nim='$nim'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>