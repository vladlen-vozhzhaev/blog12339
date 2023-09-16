<?php
    /*function f($x,$y){
        return $x ** $y;
    }

    $y = f(-5, 7);
    echo $y;*/

    /*
     * Кофемашина выдаёт сдачу номиналом 1 2 5 10
     * Мы даём на вход 100
     * Сдача составляет 48
     * Вывод: 10 10 10 10 5 2 1
     * Сдача составляет 32
     * Вывод: 10 10 10 2
     * */

    /*function getChange($num){ // $num - сдача которую нужно выдать
        $coin = 0;
        if($num>=10) $coin = 10;
        else if($num >= 5) $coin = 5;
        else if($num >= 2) $coin = 2;
        else if($num >= 1) $coin = 1;

        if($coin > 0){
            echo $coin." ";
            getChange($num - $coin);
        }
    }

    getChange(48);*/




    /*function f($n){
        if($n>2){
            return f($n-1)+f($n-2)+f($n-3);
        }else{
            return $n;
        }
    }*/

    function f($n){
        if($n > 2){
            return f($n-1) + g($n-2);
        }else{
            return 1;
        }
    }

    function g($n){
        if($n>2){
            return g($n-1)+f($n-2);
        }else{
            return $n;
        }
    }

    // Чему будет равен вызов фунции f(9)
    echo f(9);

    // f(9) = f(8) + g(7) = 27 + 17 = 44
    // f(8) = f(7) + g(6) = 17 + 10 = 27
    // f(7) = f(6) + g(5) = 11 + 6 = 17
    // f(6) = f(5) + g(4) = 7 + 4 = 11
    // f(5) = f(4) + g(3) = 4 + 3 = 7
    // f(4) = f(3) + g(2) = 2 + 2 = 4
    // f(3) = f(2) + g(1) = 1 + 1 = 2
    // g(3) = g(2)+f(1) = 2 + 1 = 3
    // g(4) = g(3) + f(2) = 3 + 1 = 4
    // g(5) = g(4) + f(3) = 4 + 2 = 6
    // g(6) = g(5) + f(4) = 6 + 4 = 10
    // g(7) = g(6) + f(5) = 10 + 7 = 17

?>