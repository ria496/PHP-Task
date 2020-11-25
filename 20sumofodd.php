<?php
$a=1;
$sum=0;
for($a=1;$a<10;$a++){
    if(!($a%2==0)){
        echo "<br>". $a;
        $sum = $sum+$a;
        echo $sum;
    }
}






?>