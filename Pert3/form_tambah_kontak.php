<?php // filename: form_tambah_kontak.php
include("koneksi.php");
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
	<h2>Tambah Kontak</h2>
	<?php 
	$q = "SELECT * FROM kategori";
	$h = mysqli_query($db, $q);
	?>
	<form action="proses_tambah_kontak.php" method="post" enctype="multipart/form-data">
		Icon:
		<input type="file" name="gambar" />
		<br />
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
			<?php while($row = mysqli_fetch_array($h)):; ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['keterangan']; ?></option>
			<?php endwhile; ?>
		</select>
		<br />
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>