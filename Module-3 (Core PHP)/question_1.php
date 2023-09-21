<?php
// Function to calculate percentage and grade
function calculatePercentageAndGrade($physics, $chemistry, $biology, $mathematics, $computer)

{
    $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
    $percentage = ($totalMarks / 500) * 100;

    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    return [$percentage, $grade];
}

// Input marks for each subject
$physics = 85;
$chemistry = 75;
$biology = 90;
$mathematics = 78;
$computer = 92;

// Calculate percentage and grade
list($percentage, $grade) = calculatePercentageAndGrade($physics, $chemistry, $biology, $mathematics, $computer);

echo "Percentage: $percentage%";
echo "Grade: $grade";

// Using switch to find if "Thursday" is in the week
$day = 'Thursday';

switch ($day) {
    case 'Monday':
        echo "$day is a weekday.";
        break;
    case 'Tuesday':
        echo "$day is a weekday.";
        break;
    case 'Wednesday':
        echo "$day is a weekday.";
        break;
    case 'Thursday':
        echo "$day is a weekday.";
        break;
    case 'Friday':
        echo "$day is a weekday.";
        break;
    case 'Saturday':
        echo "$day is a weekend day.";
        break;
    case 'Sunday':
        echo "$day is a weekend day.";
        break;
    default:
        echo "Invalid day.";
        break;
}
?>
