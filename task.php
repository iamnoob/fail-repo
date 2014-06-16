<?php
$mystring=$_POST['string'];
$findme   = 'ебал';
$pos = strpos($mystring, $findme);

if($pos === false){
    echo "fail";
}
else{
    $mystring = str_replace($findme, "", $mystring, $count);
    echo "Слово ЕБАЛ в строке найдено " . $count . " раз.";
}
?>
