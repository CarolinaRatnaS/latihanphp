<?php
	if($_GET['action'] == "edit") {
		echo "<h1>Edit Mata Kuliah</h1>";
		include("db.php");
		$query = "SELECT * FROM matkul
				  WHERE id = $_GET[id]";
		$hasil = mysqli_query($koneksi, $query);
		$row = mysqli_fetch_assoc($hasil);
	} else {
		echo "<h1>Add Mata Kuliah</h1>";
		$row['kodeMatkul'] = "";
		$row['namaMatkul'] = "";
		$row['id'] = "";
	}
?>

<form action="proses_matkul.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Mata Kuliah:
	<input type="text" name="kodeMatkul" value="<?php echo $row['kodeMatkul']; ?>" />
	<br />
	Nama Mata Kuliah:
	<input type="text" name="namaMatkul" value="<?php echo $row['namaMatkul']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>