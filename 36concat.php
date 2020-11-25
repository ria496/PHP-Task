<?php
$a1 = "Hello";
$a2 = "world";

$count1 = strlen($a1);
$count2 = strlen($a2);

$finalcount = 0;
if($count1>$count2){
    $finalcount = $count1;

}elseif($count1<$count2){
    $finalcount = $count2;
}else {
    $finalcount = $count1;
}
$a1 = str_split($a1);
$a2 = str_split($a2);
$i=0;
$result = "";
for($i=0;$i<$finalcount;$i++){
    
    $result = $result.$a1[$i].$a2[$i];

}
echo $result;









































































































































?>