<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
</head>
<body>
	<?php
		include('koneksi.php');
		$id   = $_GET['id'];
		$js  = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
		$data = mysqli_fetch_array($js);
	?>
	<center><h3>Show Data Jurusan</h3></center>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Show Biodata Jurusan</legend>
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		<p>
			Nama Jurusan <br>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['jurusan']; ?>" readonly>
		</p>
	</fieldset>
</form>  
		<center><a href="lihatdata.php">>>Kembali Lihat Data</a></center>
</body>
</html>