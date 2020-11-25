<?php
$number=array(1,2,3,4,5);
$number1 = array(6,7,8,9);
$num = array();

for($i=0;$i<count($number);$i++){
    echo "<br>".$number[$i];
}
for($i=0;$i<count($number1);$i++){
    echo "<br>".$number1[$i]; 
}

foreach($number as $key=>$val){
    $num[$val]=$val;
}
foreach($number1 as $key=>$val){
    $num[$val] = $val;
}
//echo "<br>" . $num[$val];
echo implode ($num);


$num = array(1,2,3,4,5,6,7);
$num1 = array(8,9,10,11,12,13);
$res = array();

foreach($num as $key=>$val){
    $num[$val]=$val;
}
foreach($num1 as $key=>$val){
    $num[$val] = $val;
}
echo implode($num);

?>