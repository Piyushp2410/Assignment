<?php

$originalArray = [1, 2, 2, 3, 4, 4, 5, 6, 6];


$uniqueArray = array_unique($originalArray);


$uniqueArray = array_values($uniqueArray);


foreach ($uniqueArray as $value) 
{
    echo $value . " ";
}

?>
