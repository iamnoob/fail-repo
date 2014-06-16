<?php
header("Content-Type: text/html; charset=utf-8");
$name=$_POST['name'];
$str = file_get_contents('http://vk.com/id'.$name);
preg_match('/<title>(.*)<\/title>/s', $str, $m);

echo $m[1];