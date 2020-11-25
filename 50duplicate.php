<?php
$arraychars = array("green","yellow","red","blue");
$arrlength = count($arraychars);
for($i=0;$i<$arrlength-1;$i++){
    $key = $arraychars[$i];
    if($arrcount[$key]>=1){
        $arrcount[$key]++;

    }else{
        $arrcount[$key]=1;
    }
}
print_r($arrcount);




?>