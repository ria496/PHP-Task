<?php
$number = array(5,6,7,2,3,8,9);
$length = count($number);           // count the length of array
$min = $number[0];                 // then start with 0 index
for($i=1;$i<$length;$i++){        // initalize the element by 1 
    if($number[$i]<$min){        // and suppose value start with 6<5 no its goes back 
        $min = $number[$i];
    }
}
echo $min;




?>