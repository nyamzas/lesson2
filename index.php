<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>
    <?php 
    echo '<br> <br> Задание №1<br>';
        function numbers($a, $b){
            if($a > 0 && $b > 0){
                 // если $a и $b положительные, вывести их разность;
                return var_dump ($a - $b);
            } elseif ($a < 0 && $b < 0){
                // если $а и $b отрицательные, вывести их произведение;
                return var_dump ($a * $b);
            } else {
                 // если $а и $b разных знаков, вывести их сумму;
                 return var_dump ($a + $b);
            }
        }

        numbers(9, 13);
    ?>
    <?php
    echo '<br> <br> Задание №2';

    // 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
    $a = 2;
    switch ($a){
        case 0: 
        print_r ('<br>0');

        case 1: 
        print_r ('<br>1');

        case 2: 
        print_r ('<br>2');

        case 3: 
        print_r ('<br>3');

        case 4: 
        print_r ('<br>4');

        case 5: 
        print_r ('<br>5');

        case 6: 
        print_r ('<br>6');

        case 7: 
        print_r ('<br>7');

        case 8: 
        print_r ('<br>8');

        case 9: 
        print_r ('<br>9');

        case 10: 
        print_r ('<br>10');

        case 11: 
        print_r ('<br>11');

        case 12: 
        print_r ('<br>12');

        case 13: 
        print_r ('<br>13');

        case 14: 
        print_r ('<br>14');

        case 15: 
        print_r ('<br>15');
    }

    ?>
    <?php 
        echo '<br> <br> Задание №3<br>';

        // 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
    
        function math ($num1, $num2){
                //(A) Умножение
            function multiplication($num1, $num2){
                if(!NULL){
                    return  print_r ('Умножение: ' . $num1 * $num2 . '<br>');
                }  else {
                    return print_r ("Not a number");
                }
            }
            //(Б) Деление
            function carveUp($num1, $num2){
                if(!NULL){
                    return print_r ('Деление: ' . $num1 / $num2 . '<br>');
                }  else {
                    return print_r ("Not a number");
                }
            }
            //(В) Сложение

            function sum($num1, $num2){
                if(!NULL){
                    return print_r ('Сложение: ' . ($num1 + $num2) . '<br>');
                }  else {
                    return print_r ("Not a number");
                }
            }
            //(Г) Разность
            function difference($num1, $num2){
                if(!NULL){
                    return print_r ('Разность: ' . ($num1 - $num2) . '<br>');
                }  else {
                    return print_r ("Not a number");
                }
            }

           return (multiplication($num1, $num2) . carveUp($num1, $num2) . sum($num1, $num2) . difference($num1, $num2)); 
        }

        math(3, 3);
    ?>
    <?php 
        echo '<br> <br> Задание №4<br>';
        // 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 
        // – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции 
        // выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

        function mathOperation($arg1, $arg2, $operation){
            switch($operation){
                case ('умножение'): multiplication($arg1, $arg2);
                break;

                case ('деление'): carveUp($arg1, $arg2);
                break;

                case ('разность'): difference($arg1, $arg2);
                break;

                case ('сумма'): sum($arg1, $arg2);
                break;
            }
        }

        mathOperation(4, 4, 'умножение');
        mathOperation(4, 4, 'деление');
        mathOperation(4, 4, 'разность');
        mathOperation(4, 4, 'сумма');
    ?>
    <?php 
    echo '<br> <br> Задание №5<br>';
    // 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон,
    // вывести текущий год в подвале при помощи встроенных функций PHP.
        echo date(DATE_RFC822);
    ?>   
</body>
</html>