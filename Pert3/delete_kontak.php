<?php
	// 1. koneksi
	include("koneksi.php");
	
	session_start();
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1){
	header('Location: login.php');
	//echo "BELUM LOGIN";
}
	
	//3. query
	$query = "DELETE FROM kontak
			  WHERE id=$_GET[id]";
	mysqli_query($db, $query);
	
	header('Location: index.php');
?>