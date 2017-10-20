<?php //proses_login.php
	session_start();
	
	//data dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	//buat koneksi
	$k = mysqli_connect('localhost', 'root', '', 'kalbis_web');
	
	//query data yang usernamenya sama
	$query = "SELECT * FROM users WHERE username = '$user'";
	$hasil = mysqli_query($k, $query);
	$row = mysqli_fetch_assoc($hasil);
	
	//periksa apakah hasil querynya ada
	if($row && password_verify($pass, $row['password'])){
		//kalau ada, maka cek passwordnya
		//echo "USER COCOK";
		$_SESSION['login'] = 1;
		header('Location: admin.php');
	} else {
		//jika tidak ada, username salah
		//DITOLAK
		echo "TIDAK COCOK";
	}
?>