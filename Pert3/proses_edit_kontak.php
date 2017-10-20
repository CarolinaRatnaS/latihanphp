<?php
	// 1. koneksi
	include("koneksi.php");
	
	//2. data dari form
	$id = $_POST['id'];
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$kategori = $_POST['kategori'];
	
	//3. query
	$query = "UPDATE
				kontak
			  SET
				
				nama = '$nama',
				phone = '$phone',
				email = '$email',
				kategori_id = '$kategori'
			  WHERE
				id='$id'";
	mysqli_query($db, $query);
	
	header('Location: index.php');
?>