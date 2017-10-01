<?php
	include("db.php");
	
	if($_GET['action'] == "add") {
		// 2. query
		$query = "INSERT INTO matkul (kodeMatkul, namaMatkul)
				  VALUES('$_POST[kodeMatkul]', '$_POST[namaMatkul]')";
	}
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header('Location: template.php?page=matkul');
?>


