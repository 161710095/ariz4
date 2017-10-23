<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Input Biodata Kelas</h1>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Input Biodata Kelas</legend>
		<form action="simpan.php" method="post">
			<p>
				Kelas <br/>
				<input type="text" name="kelas" required />
			</p>
			<p>
				Jurusan <br/>
				<?php
				include ('koneksi.php');
				$jurusan = mysqli_query ($koneksi, "SELECT * FROM jurusan");
				?>
				<select name="jurusan">Pilih Jurusan
					<?php
					foreach ($jurusan as $data) {
					?>
					<option value="<?php echo $data['id'];?>"><?php echo $data['jurusan']?></option>
					<?php
					}
					?>
				</select>
			</p>
			<p>
				Wali Kelas <br/>
				<input type="text" name="wali_kelas" required />
			</p>
				<input type="submit" value="Simpan">
				<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
			</p>
		</form>
	</fieldset>
	<br/>
	<center><a href="lihatdata.php">&Lt; Tabel Biodata</a></center>
</body>
</html>