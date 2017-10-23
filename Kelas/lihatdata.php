<!DOCTYPE html>
<html>
<head>
	<title>Kelas</title>
</head>
<body>
<center>
	<table border="2">
		<th>Nomor</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Wali Kelas</th>
		<th colspan="3">Opsi</th>
		<?php
		include ("koneksi.php");
		$k = mysqli_query ($koneksi, "SELECT kelas.id, kelas.kelas, kelas.wali_kelas, jurusan_id as nama_jurusan FROM kelas join jurusan on jurusan.id=kelas.jurusan_id");
		$no = 1;
		foreach ($k as $data) {
			echo "<tr>
				<td>$no</td>
				<td>".$data['kelas']."</td>
				<td>".$data['nama_jurusan']."</td>
				<td>".$data['wali_kelas']."</td>
				<td><a href = 'show.php?id=$data[id]'>Show</td>
				<td><a href = 'editkls.php?id=$data[id]'>Edit</td>
				<td><a href = 'delete.php?id=$data[id]'>Delete</td>
			</tr>";
			$no ++;
		}
		?>
	</table>
	<br>
	<br>
	<a href="tambah.php">&Plus; Tambah Data </a>
</center>
</body>
</html>