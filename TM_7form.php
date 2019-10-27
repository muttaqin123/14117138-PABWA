<!DOCTYPE html>
<html>
<head>
    <title>Form Informatika</title>
</head>
<body>
    <h2>DATA ANGGOTA HMIF</h2>
        <form action="TM_7Hasil.php" method="POST" target="_blank">
            <label>Nama :</label>
            <input type="textfield" name="nama" autofocus required><br><br>
            <label>Alamat : </label>
            <input type="textfield" name="alamat"><br><br>
            <label>Jenis Kelamin : </label><br>
            <input type="radio" name="gender" value="Laki-Laki" > Male<br>
            <input type="radio" name="gender" value="Perempuan"> Female<br><br>
            <label>Golongan Darah : </label>
            <select name="goldar">
                <option value="A" >A</option>
		        <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
	        </select><br><br>
            <label>Hobby : </label><br>
            <input type="checkbox" name="hobby" value="Belajar">Study<br>
            <input type="checkbox" name="hobby" value="Olahraga">Sport<br>
            <input type="checkbox" name="hobby" value="Menyanyi">Singing<br>
            <input type="checkbox" name="hobby" value="Ngoding">Coding<br>
            <input type="checkbox" name="hobby" value="Memancing">Fishing<br><br>
            <label>Keterangan : </label><br>
            <textarea name="Keterangan" rows="5” cols="5"></textarea><br>
            <input type="submit" value="Kirim" name="submit">
        </form>
</body>
</html>