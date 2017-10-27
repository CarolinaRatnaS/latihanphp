<?php //proses_tambah_kategori.php

	//1. Koneksi
	include("koneksi.php");
	
	session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1){
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}
	
	//2. Query
	//Data dari form
	$ket = mysqli_real_escape_string($db, $_POST['ket']);
	$query = "INSERT INTO kategori (keterangan) VALUES ('$ket')";
	mysqli_query($db, $query);
	
	header('Location: kategori.php');
?>