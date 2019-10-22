<html>
<head>
    <title>Form Pembuatan Bet Nama</title>
</head>
<body>
<form method="GET" action="Latihan 2 Bet Nama.php">
    <label>Nama : </label>
    <input type="text" name="nama" required><br>
    <br>
    <label>Warna : </label>
    <input type="text" name="color" ><br>
    <br>
    <input type="submit" value="Submit" name="proses"><br>
</form>

    <?php
    function bet($nama,$color="red"){
        $jml=strlen($nama);

        if($jml>=1 && $jml<=10){
            $jml=$jml*300;
        }elseif($jml>=11 && $jml<=20){
            $jml=$jml*500;
        }elseif($jml>20){
            $jml=$jml*700;
        }
        echo '<font color ="'.$color.'">'.$nama.'</font><br>';
        return $jml;
    }
    echo "<br>";
    $harga = bet($_GET['nama'],$_GET['color']);
    echo "<br>";
    echo "Harga Bet Nama sebesar Rp. $harga ,- ";
    ?>

</body>
</html>