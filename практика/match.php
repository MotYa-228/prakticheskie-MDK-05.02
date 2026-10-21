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
    $a=5;
    $b=10;
    $res=match(true){
        $a<$b => $a+$b,
        default => $a*$b
    };
    echo "Результат: $res\n";
    ?>

    <h1>Задача 2</h1>
    <?php
    $n=5;
    $res=match($n%2){
        0 => "Чётное",
        default => "Нечётное"
    };
    echo $res . "\n";
    ?>

    <h1>Задача 3</h1>
    <?php
    $sum=2400;
    $d=match(true){
        $sum>1000 => 0.10,
        default => 0.05
    };
    $total=$sum*(1-$d);
    echo "Итоговая стоимость: $total\n";
    ?>

    <h1>Задача 4</h1>
    <?php
    $a=5;
    $b=6;
    $c=7;
    $res=match(true){
        $a<=0 && $b<=0 && $c<=0 => "Стороны должны быть положительными",
        $a+$b>$c && $a+$c>$b && $b+$c>$a => "Треугольник существует",
        default => "Треугольник не существует"
    };
    echo $res . "\n";
    ?>

    <h1>Задача 5</h1>
    <?php
    $age=5;
    $ageGroup=match(true){
        $age<0 =>"Некорретный возвраст",
        $age<=1 =>"Котята",
        $age<=3 =>"Молодые коты",
        $age<=7 =>"Коты средних лет",
        default =>"Почтенные коты"
    };
    echo $ageGroup . "\n";
    ?>
</body>
</html>