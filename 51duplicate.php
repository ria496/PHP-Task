<?php
// $array= array(1,2,3,4,3,5,3,3);
// $array1 = array();

// foreach($array as $key=>$val){
//     $array1[$val] = $val;
// }
// print_r($array1);


$arr = array(1, 2, 3, 4, 2, 7, 8, 8, 3);   
   
print("Duplicate elements in given array: ");  
#Searches for duplicate element  
    for($i=0;$i<count($arr);$i++){
        for ($j=$i+1;$j<count($arr);$j++){
            if($arr[$i] == $arr[$j]){
                echo $arr[$j];
            }
        }
    }
    



?>