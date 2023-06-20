<?php
    $twoDArray = array( array(1,2,3,'A'), array(1,2,'B','C'), array(1,'D','E','F'), );
    $rows= count($twoDArray);
    for ($i = 0; $i<$rows; $i++) {
        for ($j = 0; $j<= count($twoDArray)-$i-1; $j++) {
            echo$twoDArray[$i][$j];
        }
        echo"<br>";
    }
    for ($i = 0; $i<= $rows; $i++) {
        for ($j = count($twoDArray); $j>= count($twoDArray)-$i; $j--) { 
            echo$twoDArray[$i][$j]; 
        }
        echo"<br>";
    }
?>
