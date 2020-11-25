<?php
$num = 12345;
$rev=0;
while($num>0){
    $a = $num % 10;// make it 5
    $rev = ($rev*10)+$a;// 0*10 +5= 5
    $num = (int)($num/10);//1234 int coz we need number in integer
}
echo "orignal number is .$rev"


?>