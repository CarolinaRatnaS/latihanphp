<h1>LOGIN</h1>

<?php 
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
		header('Location: admin.php');
	}
?>

<form action="proses_login.php" method="post">
	Username:
	<input type="text" name="username" />
	<br />
	Password:
	<input type="text" name="password" />
	<br />
	<input type="submit" value="Login" />
</form>