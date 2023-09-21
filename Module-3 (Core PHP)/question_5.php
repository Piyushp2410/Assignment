<?php
function isArmstrong($number) 

{
    $originalNumber = $number;
    $sum = 0;
    $numDigits = strlen((string)$number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

$number = 153; 

if (isArmstrong($number)) 

{
    echo "$number is an Armstrong number.";
} 

else 

{
    echo "$number is not an Armstrong number.";
}
?>

<?php
$rows = 4;

for ($i = 1; $i <= $rows; $i++) 

{
    for ($j = 1; $j <= $rows; $j++) 
    
    {
        if ($j == 1 || $j == $rows) 
        
        {
            echo $i * $rows + $j - 1;
        } 
        
        else 
        {
            echo ' ';
        }

        if ($j < $rows) 
        
        {
            echo ' ';
        }
    }

    echo "";
}
?>

