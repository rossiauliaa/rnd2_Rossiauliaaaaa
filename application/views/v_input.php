<!DOCTYPE html>
<html>
<head>
	<title>Database Pekerjaan (RnD)</title>
</head>
<body>
	<center>
		<h1></h1>
		<h3>Tambah data</h3>
	<h4>KUMPULAN DATA PEKERJAAN</h4>
<h5>By: Rossi Aulia Rachmawati(A020045)</h5>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>PEKERJAAN</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>