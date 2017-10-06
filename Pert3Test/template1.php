<?php
 //filename: template1.php
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style>
		#header{background:yellow;}
		#sidebar{background:orange;}
		#footer{background:green;}
	</style>
</head>
<body>
	<div id="header"><h3>SIK | Sistem Informasi Kampus</h3></div>
	<div id="sidebar">
		<a href="template1.php?page=kontak">Kontak</a>
	</div>
	
	<div id="konten">INI DALAH KONTEN
		<?php include($_GET['page'] . ".php"); ?>
	</div>
	<div id="footer">&copy; 2017 Kalbis Institute</div>
</body>
</html>