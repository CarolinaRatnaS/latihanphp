<?php //proses_login.php
	include("koneksi.php");
	session_start();
	
	//data dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	//buat koneksi
	
	
	//query data yang usernamenya sama
	$query = "SELECT * FROM users WHERE username = '$user'";
	$hasil = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($hasil);
	
	//periksa apakah hasil querynya ada
	if($row && password_verify($pass, $row['password'])){
		//kalau ada, maka cek passwordnya
		//echo "USER COCOK";
		$_SESSION['login'] = 1;
		header('Location: index.php');
	} else {
		//jika tidak ada, username salah
		//DITOLAK
		echo "TIDAK COCOK";
	}
?>