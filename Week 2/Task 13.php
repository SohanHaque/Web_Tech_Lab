<?php
    functionIsPrime($n)
    {
        for($x=2; $x<$n; $x++){
            if($n %$x ==0){
                return0;
            }
        }
    return1;
    }
    $number=3;
    echo"Number: " .$number;
$a = IsPrime($number);
if ($a==0)
echo'This is not a Prime Number.....'."\n";
else
echo'This is a Prime Number..'."\n";
?>
