<?php

session_start();

if (!$_SESSION['admin']) {
	header("Location: index.php");
	exit();
}

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>My Anime List Admin Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<center>
		<h1 style='font-family: consolas; font-size: 75px'>My Anime List Admin Page</h1>
		<h2 style='font-family: consolas; font-size: 50px'>Welcome Back adm00n!!!</h2>
		
		<form  action="logout.php">
			<input type="submit" value="LOG OUT" style='color: green; background-color: black; padding: 7px 14px; font-size: 20px; font-family: consolas'>
		</form>
	</center>
	
</body>

</html>
