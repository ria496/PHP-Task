<?php
function palidrome($string){
   if(strrev($string)==$string){ // use string function strrev 
       return 1;
   }else{
       return 0;
   }
}
$orignal = "DAD"; 
if(palidrome($orignal)){
    echo "palidrome";
}else{
    echo "its not palidrome";
}



?>