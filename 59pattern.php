<!-- <?php
for($i=1;$i<=5;$i++){
    echo "<br>";
    for($j=1;$j<=5;$j++){
        echo "*";
    }
    
}
echo "<hr>";


for($p=1;$p<=5;$p++){
    echo "<br>";
    for($k=1;$k<=$p;$k++){
        echo "*";
    }
}
echo "<hr>";


for($l=1;$l<=5;$l++){
    echo "<br>";
    for($m=5;$m>=$l;$m--){
        echo "*";
    }
}

echo "<hr>";

for($i=1;$i<=5;$i++) { 
    for($j=1;$j<=5;$j++) { 
        if(($i == 2 && ($j==2 || $j==3 || $j == 5))||($i == 3 && ($j==2 || $j==3 || $j == 5)) ||
         ($i == 4 && ($j==2 || $j==3 || $j == 5))){
            echo "&nbsp;&nbsp;";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

echo "<hr>";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if(($i==2 && ($j==3)) || ($i==3 && ($j==2 || $j==4)) || ($i==4 &&($j==3))){
        echo "&nbsp;&nbsp;";
    }else{
        echo "*";
    }
 }
 echo "<br>";
}

echo "<hr>";
for ($i=1; $i<=5 ; $i++) {
    for ($j=1; $j<=$i; $j++) {  
        if(($i==3 && ($j==2)) || ($i==4 && ($j==2 || $j==4))){
            echo "&nbsp;&nbsp";
        }else{
        echo "*";  
        }  # code...
    }
    echo "<br>";
}



?> -->


<?php

for($i=1;$i<=5;$i++){
    for($j=5;$j>=$i;$i--){
        echo "*";
    }
    echo "<br>";
}





?>