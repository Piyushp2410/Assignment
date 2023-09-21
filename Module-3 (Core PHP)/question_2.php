<?php
// the range of years
$startYear = 1901;
$endYear = 2016;

// check for leap years
for ($year = $startYear; $year <= $endYear; $year++) 

{
    if ($year % 4 == 0) 
    
    {
        // If the year is divisible by 4
        if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) 
        
        {
            echo "$year is a leap year.".'<br>';
        }
    }
}

?>
