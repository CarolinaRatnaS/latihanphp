<?php //proses_regis.php
	
	//data dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//enkripsi pasword
	$enc_pass = password_hash($password, PASSWORD_BCRYPT);
	
	//1.buat koneksi
	$koneksi = mysqli_connect("localhost", "root", "", "kalbis_web");
	
	//2.query
	$query = "INSERT INTO users (username, password) VALUES ('$username','$enc_pass')";
	
	mysqli_query($koneksi, $query);
	
?>