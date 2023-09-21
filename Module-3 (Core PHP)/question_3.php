<?php
// Input three numbers
$num1 = 75;
$num2 = 98;
$num3 = 33;

// the ternary operator
$largest = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

echo "The largest number  $num1, $num2, and $num3 is: $largest";
?>
