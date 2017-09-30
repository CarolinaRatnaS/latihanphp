<?php
	include("db.php");
	
	if($_GET['action'] == "add") {
		// 2. query
		$query = "INSERT INTO dosen (kodeDosen, nama)
				  VALUES('$_POST[kodeDosen]', '$_POST[nama]')";
	}else if($_GET['action'] == "edit") {
		// 2. query
		$query = "UPDATE dosen
				  SET kodeDosen = '$_POST[kodeDosen]',
					  nama = '$_POST[nama]'
				  WHERE id = $_POST[id]";
	} 
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header('Location: template.php?page=dosen');
?>


