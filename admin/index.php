<?php

session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	if (mysqli_num_rows($login) == 0) {
		die("Username atau password salah!");
	} else {
		$_SESSION['admin'] = 1;
		header("Location: admin.php");
	}
	
}

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>My Anime List Admin Login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<h1 style="text-align: center">My Anime List Admin Login</h1>
	
	<center>
		<table>
			<tr>
				<td></td>
				<td>
					<form action="" method="post">
					
						<p style="font-size:20px">Username : <input type="text" name="username"></p>
						<p style="font-size:20px">Password. : <input type="password" name="password"></p>
						<input type="submit" name="submit" value="Login">
					
					</form>
				</td>
				<td></td>
			</tr>
		</table>
	<center>
	
</body>

</html>
