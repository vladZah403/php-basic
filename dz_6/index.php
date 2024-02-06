<?php

// Написати програму на PHP, яка містить користувацьку функцію для обчислення площі
// кола та демонструє використання передачі даних у функцію за допомогою параметрів.
function area_of_circle($r)
{
    return M_PI * pow($r, 2);
}

echo "S = " . area_of_circle(5) . PHP_EOL;

// Написати програму на PHP, яка приймає число і підносить його до ступеню
function number_to_power($num, $power)
{
    return pow($num, $power);
}

echo "power = " . number_to_power(5, 5) . PHP_EOL;

//Використайте функцію в двох варіантах: коли вона повертає нове число і змінює передане.

function add_number($number)
{
    $number += 5;
    return $number;
}

$x = 5;
$new_number = add_number($x);
echo $x . PHP_EOL;
echo $new_number . PHP_EOL;
function add_number2(&$number)
{
    $number += 10;
    return $number;
}

$new_number2 = add_number2($x);
echo $x . PHP_EOL;
echo $new_number2 . PHP_EOL;