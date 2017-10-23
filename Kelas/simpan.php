<?php
include ('koneksi.php');

$kelas = $_POST['kelas'];
$jurusan   = $_POST['jurusan'];
$wali_kelas = $_POST['wali_kelas'];

$tambah = "INSERT INTO kelas SET kelas = '$kelas', jurusan_id='$jurusan', wali_kelas='$wali_kelas'";
mysqli_query($koneksi,$tambah);
header("location:lihatdata.php");
?>