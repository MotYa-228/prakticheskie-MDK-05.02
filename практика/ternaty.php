<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ДА</title>
</head>
<body>
    <h1>Условные конструкции</h1>
    <h2>Тернарный оператор</h2>
    <?php
    $a=42;
    $b=24;
    $res=$a>$b ? $a**2 : $b**2;
    echo"Квадрат макс числа $res";
    ?>
    <h2>Оператор match</h2>
    <?php
    $c=3;
    $res2=match((int)$c) {
        1 =>'c=1',
        2 =>'c=2',
        3 =>'c=5',
        10 =>'c=10',
    };
    echo $res2;
    ?>

    <h1>Задача 1</h1>
    <?php
    $a=5;
    $b=10;
    echo ($a<$b) ? ($a+$b) : ($a*$b);
    ?>
    
    <h1>Задача 2</h1>
    <?php
    $n=5;
    echo ($n%2 == 0) ? "Чётное" : "Нечётное";
    ?>

    <h1>Задание 3</h1>
    <?php
    $sum=2400;
    $d=($sum>1000) ? 0.10 : 0.05;
    $total= $sum-($sum*$d);
    echo "Итоговая стоимость: ". $total;
    ?>

    <h1>Задание 4</h1>
    <?php
    $a=5;
    $b=6;
    $c=7;
    $res=($a>0 && $b>0 && $c>0 && $a+$b>$c && $a+$c>$b && $b+$c>$a) ? "Треугольник существует" : "Треугольник не существует";
    echo $res;
    ?>

    <h1>Задание 5</h1>
    <?php
    $age=5;
    $ageGroup=($age<0) ? "Некорректный возвраст" : (($age <= 1) ? "Котята" : (($age <= 3) ? "Молодые коты" : (($age <= 7) ? "Коты средних лет" :"Почтенные коты")));
    echo $ageGroup;
    ?>
</body>
</html>