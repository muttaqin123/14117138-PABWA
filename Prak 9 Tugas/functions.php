<?php 
	//dimulai dari video nomor 7
	
	//koneksi database
	$conn = mysqli_connect("localhost","root","","artikel");

	//parameter querys mendapat data dari query di halaman index2
	function query($querys){
		global $conn;
		//mengambil data dalam database, parameter nya ada 2, yaitu coneksi dan
		//data yang akan diambil
		//result itu objek atau lemarinya

		//parameter query disini harus sama namanya dengan nama parameter diatas
		$result=mysqli_query($conn,$querys);

		//rows ini wadah kosong, berbentuk array
		$rows=[];

		//mengambil data dari obejek, di ibartkan objek itu lemari
		//dan data itu baju, maka dia menyuruh ngambil bajunya satu satu
		while($row=mysqli_fetch_assoc($result)){

			// rows itu kotaknya dan row itu bajunya, dan di tampilkan satu satu
			$rows[]=$row;
		}

		return $rows;
	}

	// $data menerima/menangkap data data dari paramter submits
	function tambah1($data){
	//ambil data dari tiap form
	global $conn;

	//htmlspecialchars berfungid agar sttring yang dimaksukan tdk dianggap
	//kode html

	//data itu berisi nama,nim,email dan jurusan
	$artikel = ($data["artikel"]);
	// $nim = htmlspecialchars($data["nim"]);
	// $email = htmlspecialchars($data["email"]);
	// $jurusan = htmlspecialchars($data["jurusan"]);
	
	//upload gambar,memakai fungsi upload

	//insert data,vlaues sesuai yang ada di tabel
	$query = "INSERT INTO artikel_1 VALUES


				(NULL,'$artikel')

				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

function tambah2($data){
	//ambil data dari tiap form
	global $conn;

	//htmlspecialchars berfungid agar sttring yang dimaksukan tdk dianggap
	//kode html

	//data itu berisi nama,nim,email dan jurusan
	$artikel = ($data["artikel"]);
	// $nim = htmlspecialchars($data["nim"]);
	// $email = htmlspecialchars($data["email"]);
	// $jurusan = htmlspecialchars($data["jurusan"]);
	
	//upload gambar,memakai fungsi upload

	//insert data,vlaues sesuai yang ada di tabel
	$query = "INSERT INTO artikel_2 VALUES


				(NULL,'$artikel')

				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}

	

	function hapus1($id){

		global $conn;
		
		mysqli_query($conn,"DELETE FROM artikel_1 WHERE id = $id");

		return mysqli_affected_rows($conn);

	}

	function hapus2($id){

		global $conn;
		
		mysqli_query($conn,"DELETE FROM artikel_2 WHERE id = $id");

		return mysqli_affected_rows($conn);

	}

	function ubah1($data){

	global $conn;

	$id = $data["id"];
	$artikel = ($data["artikel"]);
	
	//cek ubah gambar

	
	//insert data
	$query = "UPDATE artikel_1 SET 
				artikel = '$artikel'
				
				WHERE id=$id

				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


	}

	function ubah2($data){

	global $conn;

	$id = $data["id"];
	$artikel = ($data["artikel"]);
	
	//cek ubah gambar

	
	//insert data
	$query = "UPDATE artikel_2 SET 
				artikel = '$artikel'
				
				WHERE id=$id

				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


	}





		
 ?>	
