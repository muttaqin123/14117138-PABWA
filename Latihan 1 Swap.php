<?php
function swap(&$a1,&$b2){
    $temp=$a1;
    $a1=$b2;
    $b2=$temp;
}
$x = 10;
$y = 20;
echo "Bilangan Awal <br> ";
echo "Nilai 1 = $x <br>";
echo "Nilai 2 = $y <br>";
echo "</br>";
swap($x,$y);
echo "Bilangan Setelah di Swap <br> ";
echo "Nilai 1 = $x <br>";
echo "Nilai 2 = $y <br>";
?>