<?php
include '../../koneksi.php';
$kd_dosen = $_POST['kd_dosen'];
$kd_matkul = $_POST['kd_matkul'];
$waktu = $_POST['waktu'];
$ruang=$_POST['ruang'];
$id=$_POST['id'];
mysqli_query($koneksi,"update tbl_jadwal set ruang='$ruang',waktu='$waktu',kd_dosen='$kd_dosen',kd_matkul='$kd_matkul' where id='$id'");
header("location:index.php");
?>