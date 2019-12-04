<?php 
	// session_start();
	
	// //jika tombol login belum ditekan maka users akan dikembakikan ke halaman login
	// //istilahnya di tendang
	// if(!isset($_SESSION["login"])){
	// 	header("location: login.php");
	// 	exit;
	// }



	
	require 'functions.php';
	
	//cek tombol submit ,sudah di tekan atau belum
	if( isset($_POST["submits"])){

	//cek berhasil input data

	if( tambah2($_POST) > 0){

		echo "
				<script>
					alert('data berhasil di tambahkan, tekan OK untu melanjutkan');
					document.location.href='halaman_artikel_u2.php';
				</script>


			";
	}
	else{
	echo "
				<script>
					alert('data gagal di tambahkan');
					document.location.href='halaman_artikel_u1.php';
				</script>


			";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Berita</title>
	<link rel="icon" type="image/png" href="login/images/icons/genbi.PNG"/>
	
</head>
<body>
	<div class="header">
		<h1>tambah berita</h1>
	</div>


	<div class="form">

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			
			<li>
				<label for="artikel">isi artikel : </label><br>
				<input type="text" name="artikel">
			</li>
			<br>

			<button type="submit" name="submits">tambah berita</button>

		</ul>
		
	</form>

	</div>

	<footer>
		copy& Yudi Gunawan
	</footer>
</body>
</html>