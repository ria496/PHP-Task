<?php
$a=121;
$sum=0;
$temp = $a;
while($a > 1){
    $rem = $a % 10;
    $sum = ($sum * 10) + $rem;
    $a = (int)$a/10;
    
} 
if($temp==$sum){
    echo "its a palindrome";
}else{
    echo "its not palindrome";
}




?>