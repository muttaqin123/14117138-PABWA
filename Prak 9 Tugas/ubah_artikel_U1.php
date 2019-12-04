<?php
	
	 session_start();
	
	 if(!isset($_SESSION["login"])){
		header("location: log.php");
	 	exit;
	 }

	//require 'functions.php';
	require 'header.php';


	//query disini mengambil dari funtions
	//query disini mengirimkan data ke parameter query di fungtions
	$mahasiswa = query("SELECT * FROM artikel_1 ");//ORDER BY id


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman admin Ueser1</title>
	
</head>
<body>

	<a href="logout.php" >logout</a>
	<h1 align="center">DAFTAR BERITA</h1>
		<center><a href="tambah.php" style="text-decoration:none">tambah berita</a></center>
		<br><br>

	<div align="center">
		<table border ="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>no</th>
				<th>aksi</th>
				<th>berita</th>
				
				
			</tr>

			<?php $i=1; ?>
			<?php foreach($mahasiswa as $row) : ?>

			<tr>

				<td><?php echo $i; ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a>
					<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick=" return confirm('yakin?,tekan OK untuk melanjutkan')">hapus</a>
					<a href="listberita.php?id=<?php echo $row["id"]; ?>">lihat berita</a>
					
				</td>
				
				<td><?php  echo "<p>".substr($row["texts"],0,100)."</p>"; ?></td>

			</tr>

			<?php $i++; ?>
		<?php endforeach; ?>



		</table>
	</div>


</body>
</html>