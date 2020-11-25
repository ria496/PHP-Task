<?php
$array = array(1,2,3,4,5,-1,-2,-3,-4,-5);

$positive=0;
$negative=0;

for($i=0;$i<count($array);$i++){
    if($array[$i]<0){
        $negative++;
    }
}

echo "negative ".$negative;
?>
