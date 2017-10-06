<?php
	if($_GET['action'] == "edit") {
		echo "<h1>Edit Kontak</h1>";
		include("db1.php");
		$query = "SELECT * FROM t_kontak
				  WHERE id = $_GET[id]";
		$hasil = mysqli_query($koneksi, $query);
		$row = mysqli_fetch_assoc($hasil);
	} else {
		echo "<h1>Add Kontak</h1>";
		$row['nama'] = "";
		$row['kategori'] = "";
		$row['hp'] = "";
		$row['id'] = "";
	}
?>

<form action="proses_kontak.php?action=<?php echo $_GET['action']; ?>" method="post">
	Nama:
	<input type="text" name="nama" value="<?php echo $row['nama']; ?>" />
	<br />
	Kategori:
	<?php
		//koneksi
		include("db1.php");
		//query
		$q = "SELECT * FROM t_kategori";
		$hasil = mysqli_query($koneksi, $q);
	?>
	<select name="t_kategori">
		<?php
			//tampilkan
			while($row = mysqli_fetch_assoc($hasil)){
				echo "<option value='$row[id]'>$row[kategori]</option>";
			}
		?>
	</select>
	<br />
	No. HP:
	<input type="text" name="hp" value="<?php echo $row['hp']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>