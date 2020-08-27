<?php 

$morning = "Доброе утро!";
$day = "Добрый день!";
$evening = "Добрый вечер!";
$night = "Доброй ночи!";

$minyt = date("i");
$chasov = date("H");

if($chasov >= 04) {$hello = $morning;}
if($chasov >= 10) {$hello = $day;}
if($chasov >= 16) {$hello = $evening;}
if($chasov >= 22 or $chasov < 04) {$hello = $night;}

$count = 100000000;

echo "Время: $chasov:$minyt, $hello";
echo "</br>";
echo "Тест выполнения скрипта, перебор $count едениц через for на nginx: ";

$a = microtime(true);

for($i=1; $i<$count; $i++){}

echo round(microtime(true) - $a, 4);