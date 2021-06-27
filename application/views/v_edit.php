<!DOCTYPE html>
<html>
<head>
	<title>Database Pekerjaan</title>
</head>
<body>
	<center>
		<h1>KUMPULAN DATA PEKERJAAN</h1>
		<h2>by: Rossi Aulia Rachmawati(A020045)</h2>
		<h3>Edit data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NAMA</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>PEKERJAAN</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>