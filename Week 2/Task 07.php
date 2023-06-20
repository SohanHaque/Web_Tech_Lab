<?php
    $a='* ';
    for($i = 1; $i<= 3; $i = $i + 1){
        $j=$i;
        for(; $j>0; $j = $j -1){
            echo"$a";
        }
        echo"<br>";
    }
    echo"<br><br><br>";
    $p=0;
    for($i = 1; $i<= 3; $i = $i + 1){
        $j=$i;
        for(; $j<= 3; $j=$j+1){
            $b=$j-$p;
            echo"$b ";
        }
        echo"<br>";
        $p=$p+1;
    }
    echo"<br><br><br>";
    $alpha = range('A', 'Z');
    $q=-1;
    for($i = 1; $i<= 3; $i = $i + 1){   
        $j=$i;
        for(; $j>0; $j = $j -1){
            $q++;
            echo"$alpha[$q]";
        }
        echo"<br>"; 
    }  
?>
