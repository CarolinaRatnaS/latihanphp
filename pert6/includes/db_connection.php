<?php
	//1. membuat koneksi
	$connection = mysqli_connect("localhost", "root", "", "widget_corp");
	
	//2. test jika koneksi gagal
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
	}
?>