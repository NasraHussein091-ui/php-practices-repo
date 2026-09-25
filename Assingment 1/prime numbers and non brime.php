<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num = 17;
$i = 1;
$count = 0;

while ($i <= $num) {
    if ($num % $i == 0) {
        $count++;
    }
    $i++;
}

if ($count == 2) {
    echo $num . " is a prime number";
} else {
    echo $num . " is not a prime number";
}

?>
</body>
</html>