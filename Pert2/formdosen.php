<?php
	if($_GET['action'] == "edit") {
		echo "<h1>Edit Dosen</h1>";
		include("db.php");
		$query = "SELECT * FROM dosen
				  WHERE id = $_GET[id]";
		$hasil = mysqli_query($koneksi, $query);
		$row = mysqli_fetch_assoc($hasil);
	} else {
		echo "<h1>Add Dosen</h1>";
		$row['kodeDosen'] = "";
		$row['nama'] = "";
		$row['id'] = "";
	}
?>

<form action="proses_dosen.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Dosen:
	<input type="text" name="kodeDosen" value="<?php echo $row['kodeDosen']; ?>" />
	<br />
	Nama:
	<input type="text" name="nama" value="<?php echo $row['nama']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>