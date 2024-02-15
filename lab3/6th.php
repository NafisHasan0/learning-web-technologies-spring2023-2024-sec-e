<?php

    $num = [1, 2, 8, 3, 9, 0, 7, 8, 9];

    $x =10 ;
    $a = false ;

    for ($i = 0; $i < count($num); $i++)
     {
        if ($num[$i] == $x) {
            $a=true;
        }
    }

    if ($a == true) {
        echo "<br>{$x} is found";
    } 
    else{
        echo "<br>{$x} is not found";
    }
?>