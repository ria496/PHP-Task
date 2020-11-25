<?php
$a=123;
$counter = 0;

while($a > 1){
    echo $a."<br>";
    $a = ((int) $a / 10);
    $counter++;
    
}
echo "print .$counter";






?>