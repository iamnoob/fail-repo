<?php
$string = 'беалбелабебебалал беалб белаб ебал  е е ее ебал бб';
$search   = 'ебал';
$pos = strpos($string, $search);
while($pos !== false){
    $pos = strpos($string,$search);
    $newString = substr_replace($string,'',$pos,strlen($search));
    $i++;
}

echo($i);