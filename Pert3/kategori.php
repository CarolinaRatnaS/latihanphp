<?php // filename: index.php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Kategori</h2>
	<a href="form_tambah_kategori.php">Tambah Kategori</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td>
					<a href="">View Kontak</a> | 
					<a href="">Edit</a> | 
					<a href="">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>