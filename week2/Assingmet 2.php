<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ```php
<?php

$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Print all elements
echo "Array elements: ";
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

echo "<br><br>";

// Total of all elements
$total = 0;

for ($i = 0; $i < count($array); $i++) {
    $total = $total + $array[$i];
}

echo "Total of all elements: " . $total . "<br>";

// Total of even elements
$evenTotal = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $evenTotal = $evenTotal + $array[$i];
    }
}

echo "Total of even elements: " . $evenTotal . "<br>";

// Total of odd elements
$oddTotal = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 != 0) {
        $oddTotal = $oddTotal + $array[$i];
    }
}

echo "Total of odd elements: " . $oddTotal . "<br>";

// Find minimum element
$min = $array[0];

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}

echo "Minimum element: " . $min . "<br>";
echo "Minimum position(s): ";

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $min) {
        echo $i . " ";
    }
}

echo "<br>";

// Find maximum element
$max = $array[0];

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
}

echo "Maximum element: " . $max . "<br>";
echo "Maximum position(s): ";

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $max) {
        echo $i . " ";
    }
}

?>

</body>
