<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        

<?php

$a = 10;
$b = 25;
$c = 15;

if ($a > $b && $a > $c) {
    echo "Greatest is $a";
}
else if ($b > $a && $b > $c) {
    echo "Greatest is $b";
}
else {
    echo "Greatest is $c";
}

echo "<br>";

if ($a < $b && $a < $c) {
    echo "Smallest is $a";
}
else if ($b < $a && $b < $c) {
    echo "Smallest is $b";
}
else {
    echo "Smallest is $c";
}

?>




</body>
</html>