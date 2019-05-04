<?php

include 'koneksi.php';

$id = $_GET['id'];
$q  = mysqli_query($conn, "SELECT * FROM post WHERE id = '{$id}'") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);

?><!DOCTYPE html>
<html lang="utf-8">

<head>
	<title>My Anime List</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<a href='index.php' style='font-size: 20px; padding-left:20px'>Home</a>
	
	<center>
		<h1><?php echo $post['judul'] ?></h1>
		<?php echo $post['gambar'] ?>
	</center>
	
	<?php echo $post['konten'] ?>
	
</body>

</html>
