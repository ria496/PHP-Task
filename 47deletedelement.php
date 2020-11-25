<?php
$number = array(1,2,3,4,5);
$num = count($number);
for($i=0;$i<$num;$i++){
   echo "<br>". $number[$i]; 
}
$position = 1;
for($c=$position;$c<$num-1;$c++){
    $number[$c] = $number[$c+1];
}
for($c=0;$c<$num-1;$c++){
    echo $number[$c];
}







?>