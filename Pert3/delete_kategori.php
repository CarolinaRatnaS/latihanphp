<?php
	// 1. koneksi
	include("koneksi.php");
	
	//3. query
	$query = "DELETE FROM kategori
			  WHERE id=$id";
	mysqli_query($db, $query);
	
	header('Location: kategori.php');
?>