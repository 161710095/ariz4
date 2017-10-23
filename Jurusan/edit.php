<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
</head>
<body>  
	<?php
		include('koneksi.php');
		$id   = $_GET['id'];
		$jr   = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
		$data = mysqli_fetch_array($jr);
	?>
	<center><h3>Edit Data Jurusan</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Edit Jurusan</legend>
		<form action="simpaneditjurusan.php" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<p>
				Nama Jurusan<br>
				<input type="text" name="nama_jurusan" class="form-control" value="<?php echo $data['jurusan']?>" required>
			</p>
			<p>
				<input type="submit" value="Simpan">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdata.php" class="btn btn-primary">>>Kembali Lihat Data</a></center>
</body>
</html>