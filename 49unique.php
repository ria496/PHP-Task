<?php

// $num = array(1,2,3,3,4,4,5,6,6,7);
// $cout = count($num);
// for($i=0; i<$cout; $i++){
//         echo $num[$i];
//     }
    
//   for($i=0; $i<$cout; $i++){
//         $c=1;
//         if($num[$i]!=-1){
// 		    for($j=$i+1; $j<$cout; $j++){
//         	   if($num[$i]==$num[$j]){
// 			       $c++;
// 			       $num[$j]=-1;
// 		       }
// 	       }
           
//             $b[$i]=$c;
//            echo $b[$i];
// 		}

        



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