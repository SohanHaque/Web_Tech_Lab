<?php
    $my_year = 1900;
    echo"Year: " .$my_year ."<br>";
    if ($my_year % 400 == 0)
        print("It is a leap year");
    elseif ($my_year % 100 == 0)
        print("It is not a leap year");
    elseif ($my_year % 4 == 0)
        print("It is a leap year");
    else
        print("It is not a leap year");
?>
