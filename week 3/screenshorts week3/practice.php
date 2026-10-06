<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Creating a multidimensional array
$employees = array(
    array("Sadam", "EMP101", 25),
    array("Nasra", "EMP102", 22),
    array("Hassan", "EMP103", 28)
);

// Display one employee using array indexes
echo "Employee Name: " . $employees[0][0] . "<br>";
echo "Employee ID: " . $employees[0][1] . "<br>";
echo "Employee Age: " . $employees[0][2] . "<br><br>";

// Display another employee
echo "Employee Name: " . $employees[1][0] . "<br>";
echo "Employee ID: " . $employees[1][1] . "<br><br>";

// Display all employee names using foreach
echo "All Employees:<br>";

foreach ($employees as $employee) {
    echo $employee[0] . "<br>";
}

// Check whether the variable is an array
if (is_array($employees)) {
    echo "<br>The variable 'employees' is an array.";
} else {
    echo "<br>The variable 'employees' is not an array.";
}

// Check whether a value exists inside one employee's data
if (in_array("EMP102", $employees[1])) {
    echo "<br>Employee ID EMP102 was found.";
} else {
    echo "<br>Employee ID EMP102 was not found.";
}

// Count the number of employees
$totalEmployees = count($employees);

echo "<br>Total number of employees: " . $totalEmployees;

// Sort the array
sort($employees);

echo "<br><br>Employees after sorting:<br>";

foreach ($employees as $employee) {
    echo $employee[0] . "<br>";
}

// Reverse sort the array
rsort($employees);

echo "<br>Employees after reverse sorting:<br>";

foreach ($employees as $employee) {
    echo $employee[0] . "<br>";
}

// Create another multidimensional array
$newEmployees = array(
    array("Amina", "EMP104", 24),
    array("Abdi", "EMP105", 30)
);

// Merge the two arrays
$allEmployees = array_merge($employees, $newEmployees);

echo "<br>All Employees After Merging:<br>";

foreach ($allEmployees as $employee) {
    echo $employee[0] . " - " . $employee[1] . " - " . $employee[2] . "<br>";
}

?>
</body>
</html>