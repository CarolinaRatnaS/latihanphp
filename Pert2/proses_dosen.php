<?php
	include("db.php");
	
	if($_GET['action'] == "add") {
		// 2. query
		$query = "INSERT INTO dosen (kodeDosen, nama)
				  VALUES('$_POST[kodeDosen]', '$_POST[nama]')";
	}
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header('Location: template.php?page=dosen');
?>


