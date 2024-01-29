<?php



$integer1 = 10;
$integer2 = "10";

echo "Цілі числа:\n";
echo "Суворе порівняння (===): ";
var_dump($integer1 === $integer2);

echo "Несуворе порівняння (==): ";
var_dump($integer1 == $integer2);


$string1 = "Hello";
$string2 = "World";

echo "\nРядки:\n";
echo "Суворе порівняння (===): ";
var_dump($string1 === $string2);

echo "Несуворе порівняння (==): ";
var_dump($string1 == $string2);



$bool1 = true;
$bool2 = "1";

echo "\nЛогічні значення:\n";
echo "Суворе порівняння (===): ";
var_dump($bool1 === $bool2);

echo "Несуворе порівняння (==): ";
var_dump($bool1 == $bool2);



$float1 = 5.5;
$float2 = "5.5";

echo "\nЧисла з рухомою комою:\n";
echo "Суворе порівняння (===): ";
var_dump($float1 === $float2);

echo "Несуворе порівняння (==): ";
var_dump($float1 == $float2);




