<h1>Konfirmasi</h1>

<?php 
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
		header('Location: index.php');
	}
?>

<h2>Login terlebih dahulu untuk melakukan pengolahan data </h2>
<form action="proses_login.php" method="post">
	Username:
	<input type="text" name="username" />
	<br />
	Password:
	<input type="text" name="password" />
	<br />
	<input type="submit" value="Login" />
</form>