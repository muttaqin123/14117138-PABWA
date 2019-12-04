<?php 
	session_start();
	
	 if(!isset($_SESSION["login1"])){
		header("location: login_admin.php");
	 	exit;
	 }

	include('functions.php');
	$artikel = query("SELECT * FROM artikel_1");

	$artikel2= query("SELECT * FROM artikel_2");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Artikel User-01</title>
</head>
<body>

	<h1>Artikel User 1</h1>
	<?php $i=1; ?>
	<?php foreach($artikel as $art) : ?>

		
		<ul>
			<li><?php echo $i; ?></li>
			<li><?php echo $art["artikel"]; ?></li>
			<a href="ubah_artikel1.php?id=<?php echo $art["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?php echo $art["id"]; ?>" onclick=" return confirm('yakin?,tekan OK untuk melanjutkan')">hapus</a>
		</ul>
		<br><br>

		<?php $i++; ?>
	<?php endforeach; ?>

	<br><br><br>


	<h1>Artikel User 2</h1>
	<?php $i=1; ?>
	<?php foreach($artikel2 as $art) : ?>

		
		<ul>
			<li><?php echo $i; ?></li>
			<li><?php echo $art["artikel"]; ?></li>
			<a href="ubah_artikel2.php?id=<?php echo $art["id"]; ?>">ubah</a>
			<a href="hapus2.php?id=<?php echo $art["id"]; ?>" onclick=" return confirm('yakin?,tekan OK untuk melanjutkan')">hapus</a>
		</ul>
		<br><br>

		<?php $i++; ?>
	<?php endforeach; ?>
	<a href="logout_admin.php">keluar</a>


</body>
</html>