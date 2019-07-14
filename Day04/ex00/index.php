<?php
	session_start(); 
	if ($_GET["submit"] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['password'] = $_GET['password'];
	}
?>

<html><body>
	<form method="get" action=".">
		Username: <input type="text" name="login" value="<?php if ($_SESSION["login"]){ echo $_SESSION["login"];} ?>" />
		<br />
		Password: <input type="password" name="password" value="<?php if ($_SESSION["password"]){ echo $_SESSION["password"];} ?>" />
		<br />
		<input type="submit" name="submit" value="OK">
	</form>
</body></html>
