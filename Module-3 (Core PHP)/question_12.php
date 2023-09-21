<?php
$jsonString = 
'{
    "name": "John Doe",
    "age": 30,
    "city": "New York",
    "isStudent": false,
    "grades": [85, 92, 78, 95],
    "address": 
    {
        "street": "123 Main St",
        "zipcode": "10001"
    }
}';


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
    echo "Is Student: " . ($dataArray["isStudent"] ? "Yes" : "No") . "<br>";

    echo "Grades: ";
    foreach ($dataArray["grades"] as $grade) 
    {
        echo $grade . " ";
    }
    echo "<br>";

    echo "Address: " . $dataArray["address"]["street"] . ", Zipcode: " . $dataArray["address"]["zipcode"] . "<br>";
}
?>
