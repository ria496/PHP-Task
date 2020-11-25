<?php
function sum($arr,$n){
    $sum =0;
    for($i=0;$i<$n;$i++){
        $sum +=$arr[$i];

    }
}

$arr = array(1,2,3);
$n = sizeof($arr);

echo sum($arr,$n);


?>