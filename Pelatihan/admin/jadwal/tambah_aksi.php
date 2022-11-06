<?php
include '../../koneksi.php';
$kd_matkul = $_POST['kd_matkul'];
$kd_dosen = $_POST['kd_dosen'];
$ruang = $_POST['ruang'];
$waktu=$_POST['waktu'];
mysqli_query($koneksi,"insert into tbl_jadwal values('','$kd_dosen','$kd_matkul','$ruang','$waktu')");
header("location:index.php");
?>