<?php

echo "Hello what is your name? \n";
$name = fgets(STDIN);
echo "Hello $name \n";

echo "enter 5 num \n";
$num = [];
$a = fgets(STDIN);
array_push($num, $a);
$a = fgets(STDIN);
array_push($num, $a);
$a = fgets(STDIN);
array_push($num, $a);
$a = fgets(STDIN);
array_push($num, $a);
$a = fgets(STDIN);
array_push($num, $a);

print_r($num);

$sum = array_sum($num);
$avg = $sum/count($num);
echo "sum = $sum \n";
echo "avg = $avg \n";