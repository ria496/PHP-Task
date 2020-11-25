<?php
$num = array(1,2,3,4,5,6);
$len = count($num);
for($i=0;$i<$len;$i++){
    echo $num[$i]."<br>";
}
echo "<hr>";
$num[$i]=20;
$len1 = count($num);
for($i=0;$i<$len1;$i++){
    echo $num[$i]."<br>";

}


?>