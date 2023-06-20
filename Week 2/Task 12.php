<?php
    functionget_max_value($my_array){
        $n = count($my_array);
        $max_val = $my_array[0];
        for ($i = 1; $i<$n; $i++)
            if ($max_val<$my_array[$i])
                $max_val = $my_array[$i];
        return$max_val;
    }
    $my_array = array(56, 78, 91, 44, 0, 11);
    print_r("The highest value of the array is ");
    echo(get_max_value($my_array));
    echo("
");
?>
