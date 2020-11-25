<?php
$n=7;
$count=0;

for($i= 1;$i<=$n;$i++){
    if($n%$i==0){
        $count++;
    }
}if($count==2){
    echo "ita a perfect number";
}else{
    echo "ots not perfect number";
}





?>