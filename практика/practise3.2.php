<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задача 1</h1>
    <?php
    $startNumber = 2;
    $multiplier = 3;
    $quantily = 6;

    $number = $startNumber;

    for($i=0; $i<$quantily; $i++) {
        echo $number."<br>";
        $number=$number*$multiplier;
    }
    ?>
    <h1>Задача 2</h1>
    <?php
    $lastNumber = 10;
    $sum = 0;

    for($i=1; $i <= $lastNumber; $i++) {
        $sum = $sum+$i;
    }
    echo "Сумма чисел от 1 до $lastNumber равна ". $sum;
    ?>
    <h1>Задача 3</h1>
    <?php
    $lastNumber=1;
    $multiplicationResult=1;
    if ($lastNumber==1) {
        $multiplicationResult=0;
    } else {
        for($i=1; $i <= $lastNumber; $i++) {
            if ($i%2==0) {
                $multiplicationResult=$multiplicationResult*$i;
            }
        }
    }
    echo "Произведение чётных чисел от 1 до $lastNumber равно " . $multiplicationResult;
    ?>
    <h1>Задача 4</h1>
    <?php
    $n=7;
    $distance=10;
    $sum=0;
    for ($i=1; $i<=$n; $i++) {
        $sum=$sum+$distance;
        $distance=$distance*1.1;
    }
    echo "Суммарный путь за $n дней составит ". round($sum, 2), "км"
    ?>
</body>
</html>

