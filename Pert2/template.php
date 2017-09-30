<?php
 //filename: template.php
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#header{background:yellow;}
		#sidebar{background:orange;}
		#footer{background:green;}
	</style>
</head>
<body>
	<div id="header"><h3>SIK | Sistem Informasi Kampus</h3></div>
	<div id="sidebar">
		<a href="template.php?page=mahasiswa">Mahasiswa</a>
		<a href="template.php?page=dosen">Dosen</a>
	</div>
	
	<div id="konten">INI DALAH KONTEN
		<?php include($_GET["page"] . ".php"); ?>
	</div>
	<div id="footer">&copy; 2017 Kalbis Institute</div>
</body>
</html>