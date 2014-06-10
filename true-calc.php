<?php
//Имена переменных должны соответствовать тому - что они делают name1 name2 - итд это говно
//Нет нужды в ПОСТ запросе - можно и гетом обрабатывать

// Если установлены все необходимые гет параметры - то считаем, если нет рисуем форму.
if(isset($_GET['first_number']) and isset($_GET['second_number']) and isset($_GET['operation'])){

    $first = $_GET['first_number'];
    $second = $_GET['second_number'];
    $operation = $_GET['operation'];

    if($operation == '+'){
        $result = $first + $second;
        $message = 'Готово! Результат - '.$result;
    }

    if($operation == '-'){
        $result = $first - $second;
        $message = 'Готово! Результат - '.$result;
    }

    if($operation == '*'){
        $result = $first * $second;
        $message = 'Готово! Результат - '.$result;
    }

    //Экранируем обратный слеш еще одни слешем - чтобы это всё работало
    if($operation == '/' or $operation == '\\'){
        //Абсолютное сравнение - так как если он введет null, всё сломается нахуй, а нем нужен именно числовой ноль.
        if($second !== 0){
            $result = $first / $second;
            $message = 'Готово! Результат - '.$result;
        }else{
            $message = 'Ошибка - на ноль не делим';
        }
    }

    print_r($message);
    print_r('<br>');
    print_r('<br>');
    print_r('<a href="true-calc.php">Назад</a>');

}else{
    $form = '<form action="true-calc.php" method="get" enctype="multipart/form-data">';
    $form .=    'Введите число 1: <input type="text" name="first_number"><br>';
    $form .=    'Введите число 2: <input type="text" name="second_number"><br>';
    $form .=    'Введите знак операции: <input type="text" name="operation"><br>';
    $form .=    '<input type="submit" value="Получить результат">';
    $form .= '</form>';

    print_r($form);
}

