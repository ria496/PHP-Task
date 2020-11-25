<?php
$num = array(1,2,3,4,5,6,7);
$len = count($num);
$max=$num[0];
$smax;
for($i=0;$i<$len;$i++){
    echo $num[$i];
    if($max<$num[$i]){
        $smax = $max;
        $max = $num[$i];
    }else if($smax<$num[$i] && $smax < $max) {
        $smax = $num[$i];
        
    }
}
print_r($num);
echo "<br><br>";
echo "second largest : $smax";



?>