<!DOCTYPE html>
<html>
<head>
	<title>Kelas</title>
</head>
<body>  
	<?php
		include('koneksi.php');
		$id   = $_GET['id'];
		$kls  = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id='$id'");
		$data = mysqli_fetch_array($kls);
	?>
	<center><h3>Edit Data Kelas</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Edit kelas</legend>
		<form action="simpaneditkls.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<p>
				Kelas<br>
				<input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>" required>
			</p>
			<p>
				Jurusan<br>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama_jurusan'] ?>" required>
			</p>
			<p>
				Wali Kelas<br>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['wali_kelas'] ?>" required>
			</p>
			<p>
				<input type="submit" value="Simpan">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdatakls.php" class="btn btn-primary">>>Kembali Lihat Data</a></center>
</body>
</html>