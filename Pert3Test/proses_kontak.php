<?php
	include("db1.php");
	
	if($_GET['action'] == "add") {
		// 2. query
		$query = "INSERT INTO t_kontak (nama, kategori, hp)
				  VALUES('$_POST[nama]', '$_POST[kategori]', '$_POST[hp]')";
	}else if($_GET['action'] == "edit") {
		// 2. query
		$query = "UPDATE t_kontak
				  SET nama = '$_POST[nama]',
					  kategori = '$_POST[kategori]'
				  WHERE id = $_POST[id]";
	} else if($_GET['action'] == "delete") {
		$query = "DELETE FROM t_kontak
				  WHERE id=$_GET[id]";
	}
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header('Location: template1.php?page=kontak');
?>