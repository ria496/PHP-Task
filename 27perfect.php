<?php
$n=6;
$sum=0;
for($i=1;$i<$n;$i++){
    if($n % $i == 0){
       $sum = $sum+$i;
    }
}
if($n==$sum){
    echo "its is perfect square";
}else{
    echo "its not perfect square";
}






?>