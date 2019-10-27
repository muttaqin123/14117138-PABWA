<?php
function fak(&$value){
    $hasil=1;
    for($i=$value;$i>0;$i--){
        $hasil=$hasil*$i;
        if($i>1){
            echo "$i x ";
        }else{
            echo "$i = ";
        }
    }
    $value=$hasil;
}
$x = 4;
echo "Faktorial dari $x adalah <br><br>";
fak($x);
echo $x;
?>