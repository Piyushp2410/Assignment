<?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) 

{
    for ($j = 1; $j <= $rows; $j++) 
    
    {
        if ($i == 1 || $i == $rows || $j == 1 || $j == $rows) 
        {
            echo '*';
        } 
        
        else 
        {
            echo ' ';
        }
    }
    
    echo "".'<br>';
}
?>
