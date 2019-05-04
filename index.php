<?php

include 'koneksi.php';

$posts = mysqli_query($conn, "SELECT * FROM post");

?><!DOCTYPE html>
<html lang="utf-8">

<head>
	<title>My Anime List</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	
	<h1 style="text-align: center; font-size: 60px">My Anime List</h1>
	
	<?php
	
	while($row = mysqli_fetch_array($posts)) {
		echo "<a href='post.php?id={$row['id']}'><h2 style='margin: 10px; padding-left: 50px'>{$row['id']} : {$row['judul']}</h2></a>";	
	}
	
	?>
	
</body>

</html>
