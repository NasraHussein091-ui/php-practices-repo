<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 8;
$num2 = 12;

$lcm = $num1;

while ($lcm % $num2 != 0) {
    $lcm = $lcm + $num1;
}

echo "LCM = " . $lcm;

?>
</body>
</html>