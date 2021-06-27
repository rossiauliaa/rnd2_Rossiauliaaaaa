<!DOCTYPE html>
<html>
<head>
	<title>Database Pekerjaan</title>
</head>
<body>
	<div class="judul">
	<center> <h1>KUMPULAN DATA PEKERJAAN</h1></center>
	<center> <h2>by: Rossi Aulia Rachmawati(A020045)</h2></center>
	</div>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>PEKERJAAN</th>
			<th>KETERANGAN</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
				<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>