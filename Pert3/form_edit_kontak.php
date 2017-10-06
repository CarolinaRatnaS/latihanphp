<?php // filename: form_edit_kontak.php

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
	<h2>Edit Kontak</h2>
	<form action="" method="post">
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<select name="kategori">
			<option value=""></option>
		</select>
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>