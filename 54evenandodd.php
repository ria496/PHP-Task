<?php
$number = array(1,2,3,4,5,6);
$num = count($number);
$j=0;
$k=0;
for($i=0;$i<$num;$i++)
{
    if($number[$i]%2==0){
        $arr2[$j]=$number[$i];
        $j++;

    }else{
        $arr3[$k]=$number[$i];
        $k++;
    }
}
for($i=0;$i<$j;$i++){
    echo "print the even elemnt ".$arr2[$i]."<br>";
}
for($i=0;$i<$k;$i++){
    echo "print the odd number ".$arr3[$i]."<br>";
}




?>