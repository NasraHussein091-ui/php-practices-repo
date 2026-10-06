# Week 3 – PHP Multidimensional Arrays and Array Functions

## Overview

Week 3 focuses on working with **multidimensional arrays** in PHP and using built-in array functions to organize, search, count, sort, and combine data.

The Week 3 practical example uses an employee list. Each employee has:

- Name
- Employee ID
- Age

## Main Topic: Multidimensional Arrays

A multidimensional array is an array that contains other arrays.

Example:

```php
$employees = array(
    array("Sadam", "EMP101", 25),
    array("Nasra", "EMP102", 22),
    array("Hassan", "EMP103", 28)
);
```

Each inner array represents one employee.

The indexes are used to access the data:

```text
First index:
0 = first employee
1 = second employee
2 = third employee

Second index:
0 = employee name
1 = employee ID
2 = employee age
```

For example:

```php
$employees[0][0]
```

accesses the name of the first employee.

## Displaying Data with echo

The `echo` statement displays information on the webpage.

Example:

```php
echo "Employee Name: " . $employees[0][0];
```

The dot (`.`) is used to concatenate, or join, strings and values.

## foreach Loop

The `foreach` loop is used to go through each employee in the array.

```php
foreach ($employees as $employee) {
    echo $employee[0] . "<br>";
}
```

This avoids manually writing code for every employee.

## is_array()

The `is_array()` function checks whether a variable is an array.

```php
if (is_array($employees)) {
    echo "The variable is an array.";
}
```

It returns `true` when the variable contains an array.

## in_array()

The `in_array()` function checks whether a particular value exists in an array.

```php
if (in_array("EMP102", $employees[1])) {
    echo "Employee ID EMP102 was found.";
}
```

This is useful when searching for a value.

## count()

The `count()` function counts the number of elements in an array.

```php
$totalEmployees = count($employees);
```

For the original employee array, the result is `3`.

## sort()

The `sort()` function sorts an array in ascending order.

```php
sort($employees);
```

When used with nested arrays, PHP applies its sorting rules to the array values.

## rsort()

The `rsort()` function sorts an array in reverse/descending order.

```php
rsort($employees);
```

In simple terms:

```text
sort()  = ascending order
rsort() = descending order
```

## array_merge()

The `array_merge()` function combines two arrays into one.

Example:

```php
$allEmployees = array_merge($employees, $newEmployees);
```

This allows additional employee records to be added to the existing collection.

## Concepts Practiced

| PHP Concept | Purpose |
|---|---|
| Multidimensional array | Stores groups of related data |
| Array indexes | Access individual values |
| `echo` | Displays output |
| `foreach` | Loops through array records |
| `is_array()` | Checks whether a variable is an array |
| `in_array()` | Searches for a value |
| `count()` | Counts array elements |
| `sort()` | Sorts an array |
| `rsort()` | Sorts an array in reverse order |
| `array_merge()` | Combines arrays |

## Learning Outcome

After completing Week 3, I understand how to create and access multidimensional arrays in PHP. I also practiced using loops and common array functions to process structured data.

These techniques can be applied to real applications that manage students, employees, products, customers, or other records.
