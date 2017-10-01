<?php
	include("db.php");
	
	if($_GET['action'] == "add") {
		// 2. query
		$query = "INSERT INTO matkul (kodeMatkul, namaMatkul)
				  VALUES('$_POST[kodeMatkul]', '$_POST[namaMatkul]')";
	} else if($_GET['action'] == "edit") {
		// 2. query
		$query = "UPDATE matkul
				  SET kodeMatkul = '$_POST[kodeMatkul]',
					  namaMatkul = '$_POST[namaMatkul]'
				  WHERE id = $_POST[id]";
	}
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header('Location: template.php?page=matkul');
?>