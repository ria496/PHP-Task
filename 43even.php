<?php
    $array = array(1,2,3,4,5,6);
    
    $even =0;
    $even1 = 0;

    for($i=0;$i<count($array);$i++)
    {
        if($array[$i]%2==0) // divide the array element 
        {
        
            $even++;
            
        }
        else{
            $even1++;
        }
    }


echo"negative number total   ".$even;
echo "<br>";
echo " positive odd number ".$even1;



?>



