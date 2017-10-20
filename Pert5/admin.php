<?php 
	session_start();
	
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
		header('Location: login.php');
		//echo "BELUM LOGIN";
	}
?>

<h1>ADMIN</h1>

<h2>Ini contoh halaman admin</h2>

<a href="logout.php">logout</a>

