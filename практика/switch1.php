<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задача 1</h1>
    <form action="">
        <p>Введите число:</p>
        <input name="number">
        <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_GET['number'])){
        $a=$_GET['number'];
        switch($a){
            case 0:
                echo 'zero';
                break;
            case 1:
                echo 'one';
                break;
            case 2:
                echo 'two';
                break;
            case 3:
                echo 'three';
                break;
            case 4:
                echo 'four';
                break;
            case 5:
                echo 'five';
                break;
            case 6:
                echo 'six';
                break;
            case 7:
                echo 'seven';
                break;
            case 8:
                echo 'eight';
                break;
            case 9:
                echo 'nine';
                break;
            default:
                echo 'Число не нашлось';
        }
    } else {
        echo 'Данные не полученны';
    }
    ?>
    <h1>Задача 2</h1>
    <form action="">
        <p>Введите число:</p>
        <input name="number">
        <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_GET['number'])){
        $a=$_GET['number'];
        switch($a){
            case 1:
                echo '1 января - Новый год<br>7 января - Рождество';
                break;
            case 2:
                echo '23 февраля - День защитника Отечества';
                break;
            case 3:
                echo '8 марта - Международный женский день';
                break;
            case 4:
                echo 'Праздничных дней нет';
                break;
            case 5:
                echo '1 мая - Праздник Весны и Труда<br>9 мая - День Победы';
                break;
            case 6:
                echo '12 июня - День России';
                break;
            case 7:
                echo 'Праздничных дней нет';
                break;
            case 8:
                echo 'Праздничных дней нет';
                break;
            case 9:
                echo '1 сентятбря - День Знаний';
                break;
            case 10:
                echo 'Праздничных дней нет';
                break;
            case 11:
                echo '4 ноября - День народного единсттва';
                break;
            case 12:
                echo 'Праздничных дней нет';
                break;
            default:
                echo 'Число не нашлось';
        }
    }
    ?>
    <h1>Задача 3</h1>
    <form method="POST">
        <label>Введите любое целое число:</label>
        <input type="number" name="number" required>
        <button type="submit" name="task3">Вычислить</button>
    </form>
    <?php
    if (isset($_POST['task3'])) {
        $num = abs((int)$_POST['number']);
        $last_digit = $num % 10;
        $square_last_digit = ($last_digit * $last_digit) % 10;
    
        echo "<p>Последняя цифра числа: <b>$last_digit</b></p>";
        echo "<p>Последняя цифра его квадрата: <b>$square_last_digit</b></p>";
    }
    ?>
    <h1>Задача 4</h1>
    <form method="POST">
        <label>Введите возраст k (от 1 до 99):</label>
        <input type="number" name="age" min="1" max="99" required>
        <button type="submit" name="task4">Вывести фразу</button>
    </form>

    <?php
    if (isset($_POST['task4'])) {
        $k = (int)$_POST['age'];
    
        $last_digit = $k % 10;
        $last_two_digits = $k % 100;
    
        if ($last_two_digits >= 11 && $last_two_digits <= 14) {
            $word = 'лет';
        } else if ($last_digit == 1) {
            $word = 'год';
        } else if ($last_digit >= 2 && $last_digit <= 4) {
            $word = 'года';
        } else {
            $word = 'лет';
        }
    
        echo "<p><b>Мне $k $word</b></p>";
    }
    ?>
</body>
</html>