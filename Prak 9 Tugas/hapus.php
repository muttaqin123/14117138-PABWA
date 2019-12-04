<?php 
	


	require 'functions.php';
	
	//id tidak di kenali
	$id=$_GET["id"];

	if( hapus1($id)>0 ){

	 	echo "
	 			<script>
	 				alert('data berhasil di HAPUS,tekan OK untuk melanjutkan');
	 				document.location.href='halaman_artikel_u1.php';
	 			</script>
	 		";
	 }
	 else{
		echo "
				<script>
	 				alert('data gagal di HAPUS');
					document.location.href='halaman_artikel_u1.php';
				</script>
	 		";

	}



 ?>