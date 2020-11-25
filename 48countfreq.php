<?php
$num = array(1,2,3,4,3,3,2,2,4,5);
$cout = 0;
$len = count($num);
for($i=0;$i<$len;$i++){
    echo $num[$i];
}
for($i=0;$i<$len;$i++){
    $cout = 1;
    if($num[$i]!=-1){
        for($j=$i+1;$j<$len;$j++){
            if($num[$i]==$num[$j]){
                $cout++;
                $num[$j]=-1;
            }
        }
        $n[$i]=$cout;
    }
}
for($i=0;$i<$len;$i++){
    if($num[$i]!=-1){
        echo"evho the part  " .$num[$i]."the part  ".$n[$i]."<br>";
    }
}



?>