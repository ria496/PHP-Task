<?php
$arr = ['a','b','c','d','e','f'];

$size = count($arr);
    $res=array();
  for($i=$size-1; $i>=0; $i--){
       $res[]= $arr[$i];
  }

echo implode($res);



$num = array('a','b','c','d','e','f');

$size = count($num);
$res = array();
for($i=$size-1;$i>=0;$i--){
     $res[] = $num[$i];
}

$num = array('a','b','c','d','e','f');
$bat = count($num);
$res = array();
for($i=$bat-1;$i>=0;$i--){
  $res[] = $num[$i];
}

?>