<!DOCTYPE html>
<html>
<body>

<?php

// display intro
echo "Hello PHP!";
echo "<br><br>";

//  Constant variables
define("NAME", "Nasra");
echo "My name is " . NAME;
echo "<br><br>";

// If else
$age = 20;

if ($age >= 18) {
    echo "I am an adult.";
} else {
    echo "I am under 18.";
}

echo "<br><br>";

//  If else if 
$mark = 75;

if ($mark >= 80) {
    echo "Grade A";
} elseif ($mark >= 70) {
    echo "Grade B";
} elseif ($mark >= 60) {
    echo "Grade C";
} else {
    echo "Grade F";
}

echo "<br><br>";

// Switch
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Another day";
}

echo "<br><br>";

// Logical operator
$age = 20;
$mark = 75;

if ($age >= 18 && $mark >= 50) {
    echo "The student passed.";
} else {
    echo "The student did not pass.";
}

?>

</body>
</html>
