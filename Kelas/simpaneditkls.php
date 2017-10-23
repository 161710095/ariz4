<?php
include ('koneksi.php');

$id      	    = $_POST['id'];
$kelas     		= $_POST['kelas'];
$jurusan        = $_POST['nama_jurusan'];
$wali_kelas     = $_POST['wali_kelas'];


$edit     = "UPDATE kelas SET kelas= '$kelas', jurusan='$jurusan',wali_kelas='$wali_kelas',$id',WHERE id='$id'";

mysqli_query($koneksi,$edit);
header("location:lihatdatamahasiswa.php");
?>   