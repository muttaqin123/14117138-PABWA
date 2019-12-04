<?php 
	session_start();
	
	 if(!isset($_SESSION["login2"])){
		header("location: login_U2.php");
	 	exit;
	 }
	include('functions.php');
	$artikel = query("SELECT * FROM artikel_1");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Artikel User-01</title>
</head>
<body>

	<h1>Artikel User 1</h1>
	<a href="tambah_artikel_u1.php">Tambah Data</a>
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
	<a href="logout_U1.php">keluar</a>


</body>
</html>