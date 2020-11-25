<?php
$num=153;

$temp = $num;
$sum=0;
while($num>0){
    $rem = $num%10;
    $arm = $rem*$rem*$rem;
    $sum = $sum+$arm;
    $num = $num/10;

}
if($temp==$sum){
    echo "the armstrong ";
}else{
    echo "not armstrong number";
}




?>