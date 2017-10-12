<?php // filename: form_edit_kontak.php
	//koneksi
	include("koneksi.php");
	
	$id = $_GET['id'];
	
	//query
	$query = "SELECT
				a.id, a.nama, a.phone, a.email,
				b.keterangan
			  FROM
				kontak a,
				kategori b
			  WHERE
				a.kategori_id && b.id = $_GET[id]";
	$hasil = mysqli_query($db, $query);
	
	//tampil
	$row = mysqli_fetch_assoc($hasil);
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
	<?php 
	$q = "SELECT * FROM kategori";
	$h = mysqli_query($db, $q);
	?>
	<form action="proses_edit_kontak.php" method="post">
		Nama:
		<input type="text" value="<?php echo $row['nama']; ?>" name="nama"  />
		<br />
		Phone:
		<input type="text" value="<?php echo $row['phone']; ?>" name="phone" />
		<br />
		Email:
		<input type="text" value="<?php echo $row['email']; ?>" name="email" />
		<br />
		Kategori:
		<select name="kategori">
			<?php while($row = mysqli_fetch_array($h)):; ?>
			<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
			<?php endwhile; ?>
		</select>
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>