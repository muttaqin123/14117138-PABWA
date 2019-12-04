<?php 
	
	// session_start();
	
	// if(!isset($_SESSION["login"])){
	// 	header("location: login.php");
	// 	exit;
	// }

	require 'functions.php';

	//ambil data di url

	$id=$_GET["id"];

	//query data mahasiswa berdasarkan id

	$artikel = query("SELECT * FROM artikel_1 WHERE id=$id")[0];
	
	//cek tombol submit ,sudah di tekan atau belum
	if( isset($_POST["submit"])){

	//cek berhasil ubah data

	if( ubah1($_POST) > 0){

		echo "
				<script>
					alert('data berhasil di ubah, tekan OK untu melanjutkan');
					document.location.href='halaman_artikel_u1.php';
				</script>


			";
	}
	else{
	echo "
				<script>
					alert('data gagal di ubah');
					document.location.href='halaman_artikel_u1.php';
					
				</script>


			";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data mahasiswa</title>
</head>
<body>
	<h1>ubah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $artikel["id"]; ?>">
		
			
			<li>
				<label for="artikel">Isi Artikel : </label>
				<input type="text" name="artikel" id="artikel" value="<?php echo $artikel["artikel"]; ?>" >
			</li>
			
			<button type="submit" name="submit">ubah data</button>

		</ul>
		
	</form>

</body>
</html>