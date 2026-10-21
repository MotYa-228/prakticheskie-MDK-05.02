<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Оператор вывода - switch</h1>
<?php
$a=5;
switch($a) {
    case 1:
        echo 'a=1';
        break;
    case 2:
        echo 'a=2';
        break;
    case 3:
        echo 'a=3';
        break;
    case 5:
        echo 'a=5';
        break;
    case 10:
        echo 'a=10';
        break;
    case 15:
        echo 'a=15';
        break;
    default:
        echo 'Число не нашлось';
}
?>
</body>
</html>