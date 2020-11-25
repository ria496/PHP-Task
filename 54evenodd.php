<?php
$odd=array(1,2,3,4,5,6,7);
$even=array(1,2,3,4.5,6,7);
$count=1;
foreach($array as $key=>$val){
    if($key%2==1){
        $odd[] = $val;
    }
    else{
        $even[] = $val;
    }
    $count++;
}





?>