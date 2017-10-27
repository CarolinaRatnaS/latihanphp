<?php
	// 1. koneksi
	include("koneksi.php");
	
	session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1){
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}
	
	//2. data dari form
	$id = $_POST['id'];
	$ket = mysqli_real_escape_string($db, $_POST['ket']);
	
	//3. query
	$query = "UPDATE kategori
			  SET keterangan = '$ket'
			  WHERE id=$id";
	mysqli_query($db, $query);
	
	header('Location: kategori.php');
?>