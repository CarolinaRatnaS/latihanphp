<?php
	// 1. koneksi
	include("koneksi.php");
	
	//3. query
	$query = "DELETE FROM kontak
			  WHERE id=$_GET[id]";
	mysqli_query($db, $query);
	
	header('Location: index.php');
?>