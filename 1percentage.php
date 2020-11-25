<?php
$p=95;
$c=85;
$b=79;
$total = NULL;
$percent = NULL;
//p=physics
//c=chemistry
//b=biology
$total = $p +$c + $b;
$percent=($total / 300.0) * 100;

echo "the total percentage = " . $total . "/500<br>";
echo "the percentage = " . $percent ."%";



?>