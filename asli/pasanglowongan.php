<!DOCTYPE html>
<html>
<head>
	<center>
	<h1>FORM Tambah Pekerjaan</h1>
</head>
<body>
		<form action="" method="post">
		<table id="tb">
			<tr>
				<td>Nama Pekerjaan</td>
				<td><input type="text" name="nama_pekerjaan"></td>
			</tr>
			<tr>
				<td>Bidang Pekerjaan</td>
				<td><input type="text" name="bidang"></td>
			</tr>
			<tr>
				<td>Jenis Pekerjaan</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td><input type="text" name="gaji"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			</table>
		<button type="submit" name="post"> SIMPAN</button>
	</form>
	</center>

	<?php
	if (isset($_POST['post'])) {
		$nama_pekerjaan = $_POST['nama_pekerjaan'];
		$bidang = $_POST['bidang'];
		$jenis = $_POST['jenis'];
		$gaji = $_POST['gaji'];
		$deskripsi = $_POST['deskripsi'];
		

		include("koneksi.php");

		$koneksi = mysqli_query($koneksi,"INSERT INTO detail_lowongan VALUES('','',$nama_pekerjaan','$bidang','$jenis','$gaji','$deskripsi')");
	 } 
	 ?> 

</body>
</html>