<?php
    $a = 8;
    $b = 3;
    $name = "Ivan";
    echo 'Hello '.$name.'<br>';
    echo $a+$b."<br>"; // 11
    echo $a-$b."<br>"; // 5
    echo $a * $b."<br>"; // 24
    echo $a / $b."<br>"; // 2.66666
    echo $a % $b."<br>"; // 2 (19%5) -> 4
    echo $a ** $b."<br>"; // 512
    echo $a == $b."<br>"; // false -> ""
    echo $a > $b."<br>"; // true -> "1"
    echo $a <= $b."<br>"; // false -> ""
    echo "<hr>";
// Есть трехзначное число 278, задача
// Вывести на экран сотни, десятки, единицы, через пробел
// Пример вывода: 2 7 8
$number = 278; // число может быть любым
$hundred = ($number - ($number % 100)) / 100;
$dec = (($number % 100) - ($number % 10))/10;
$ed = $number % 10;
echo "$hundred $dec $ed";