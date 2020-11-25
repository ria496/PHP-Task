<?php
$num = 2017;

$blog = ($num%4==0 && $num%100!=0) ? echo("LEAP YEAR") :
        ($num%400 ==0 ) ? echo("LEAP YEAR") : echo("COMMON YEAR");






?>