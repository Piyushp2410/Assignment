<?php

$colors = ['red', 'green', 'blue', 'yellow', 'orange'];


$randomKey = array_rand($colors);
$randomColor = $colors[$randomKey];

echo "A random color: $randomColor\n";


$randomKeys = array_rand($colors, 3);
$randomColors = [];
foreach ($randomKeys as $key) {
    $randomColors[] = $colors[$key];
}

echo "Three random colors: " . implode(', ', $randomColors) . "";
?>
