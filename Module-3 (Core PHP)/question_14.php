<?php

$balances = array(
    array(1.5, 2.0, 3.5, 4.0, 5.5),
    array(6.0, 7.5, 8.0, 9.5, 10.0),
    array(11.5, 12.0, 13.5, 14.0, 15.5)
);


$row = 1; 
$column = 2;
$value = $balances[$row][$column];
echo "Value at row $row, column $column: $value";
?>
