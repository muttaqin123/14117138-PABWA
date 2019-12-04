<?php 
	
	session_start();
	
	 if(!isset($_SESSION["login3"])){
		header("location: login_U2.php");
	 	exit;
	 }
	
	include('functions.php');
	$artikel = query("SELECT * FROM artikel_2");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Artikel User-02</title>
</head>
<body>

	<h1>Artikel User 2</h1>
	<a href="tambah_artikel_u2.php">Tambah Data</a>
	<?php $i=1; ?>
	<?php foreach($artikel as $art) : ?>

		
		<ul>
			<li><?php echo $i; ?></li>
			<li><?php echo $art["artikel"]; ?></li>
			<a href="ubah_artikel2.php?id=<?php echo $art["id"]; ?>">ubah</a>
			<a href="hapus2.php?id=<?php echo $art["id"]; ?>" onclick=" return confirm('yakin?,tekan OK untuk melanjutkan')">hapus</a>
		</ul>
		<br><br>

		<?php $i++; ?>
	<?php endforeach; ?>


</body>
</html>