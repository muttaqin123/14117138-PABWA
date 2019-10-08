<?php
//MENCARI BILANGAN PRIMA DARI 1-37;
echo "Bilangan Prima dari 1-37 adalah = ";
for($i=1;$i<=37;$i++){
    $a = 0;
    for($j=1;$j<=$i;$j++){
        if($i % $j == 0){
            $a++;
        }
    }
    if($a == 2){
        echo $i.' ';
    }
}
?>