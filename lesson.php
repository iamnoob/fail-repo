<?php
header("Content-Type: text/html; charset=utf-8");
$name1=$_POST['name1'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];

$a = $name1+$name2;
$b = $name1-$name2;
$c = $name1*$name2;
if($name2 == 0)
$d = "Нельзя делить на ноль.";
else $d =$name1/$name2;

switch($name3){
    case "+":
        echo "Результат = " . $a;
        break;
    case "-":
        echo "Результат = " . $b;
        break;
    case "*":
        echo "Результат = " . $c;
        break;
    case "/":
        echo "Результат = " . $d;
        break;
    default:
        echo "Некорректная операция";
        break;
}