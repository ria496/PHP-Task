<?php
  $num = array(1,2,3,3,4,4,5,5,6,6,7);
  $cout = count($num);
  for($i=0;$i<$cout;$i++){
      echo $num[$i];
  }
  for($i=0;$i<$cout;$i++){
      for($j=0;$j<$i;$j++){
          if($num[$i]==$num[$j]){
          break;
        
       // if ($i == $j)
        }
      }
     if($i==$j){
         echo $num[$i];
     }
          
}





?>
