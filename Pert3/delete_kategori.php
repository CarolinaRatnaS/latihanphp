<?php
	// 1. koneksi
	include("koneksi.php");
	
	session_start();
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1){
	header('Location: login.php');
	//echo "BELUM LOGIN";
}
	
	//3. query
	$query = "DELETE FROM kategori
			  WHERE id=$id";
	mysqli_query($db, $query);
	
	header('Location: kategori.php');
?>