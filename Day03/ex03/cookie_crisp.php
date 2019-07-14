<?php
if ($_GET["action"] == "set")
	setcookie($_GET["name"], $_GET["value"], time() + 1800);
else if ($_GET["action"] == "get")
	echo $_COOKIE[$_GET["name"]] . "\n";
else if ($_GET["action"] == "del")
	setcookie($_GET["name"], '', time() - 1800);
?>
