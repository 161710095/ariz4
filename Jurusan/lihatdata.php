<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
</head>
<body>
<center>
	<table border="2">
		<th>Nomor</th>
		<th>Jurusan</th>
		<th colspan="3">Opsi</th>
		<?php
		include ("koneksi.php");
		$j = mysqli_query ($koneksi, "SELECT * FROM jurusan");
		$no = 1;
		foreach ($j as $data) {
			echo "<tr>
				<td>$no</td>
				<td>".$data['jurusan']."</td>
				<td><a href = 'showjs.php?id=$data[id]'>Show</td>
				<td><a href = 'edit.php?id=$data[id]'>Edit</td>
				<td><a href = 'deletejs.php?id=$data[id]'>Delete</td>
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