<?php
function sum($max) {

    $result = 0;

    for($i = 1; $i <= $max; $i++ ){
        $result += $i *2 ;
    }
    
    return $result;
               }

echo sum(100);
?>