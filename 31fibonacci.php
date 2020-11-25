<?php
$num = 0;
$n1=0;
$n2=1;
echo $n1."<br>"." ".$n2."<br>";
while($num<10){
    $n3 = $n1+$n2;
    echo $n3." "."<br>";
    $n1 = $n2;
    $n2 = $n3;
    $num = $num+1;
}






?>