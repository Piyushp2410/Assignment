<?php

// Indexed Array:

$colors = array("red", "green", "blue");

$colors = ["red", "green", "blue"];

// Associative Array:
$person = array("first_name" => "John", "last_name" => "Doe", "age" => 30);

$person = ["first_name" => "John", "last_name" => "Doe", "age" => 30];

// Multi-dimensional Array:
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);


$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// JSON string:

$jsonString = '{"name": "John", "age": 30, "city": "New York"}';


$dataArray = json_decode($jsonString, true);


if ($dataArray === null)
{
    echo "JSON decoding failed.";
} 
else 
{
    
    echo "Name: " . $dataArray["name"] . "<br>";
    echo "Age: " . $dataArray["age"] . "<br>";
    echo "City: " . $dataArray["city"] . "<br>";
}

?>