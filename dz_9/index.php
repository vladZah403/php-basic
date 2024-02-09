<?php

// #1
function one_to_ten():void
{
    $i = 1;
    while ($i !== 11) {
        echo $i . PHP_EOL;
        $i++;
    }
}

// #2
function factorial(int $num_factorial) :int {
    $i = 1;
    $factor = 1;
    while ($i !== $num_factorial+1){
        $factor *= $i;
        $i++;
    }
    return $factor;
}

// #3
$arr = [];
function paired_numbers(array $arr) :array
{
    $i = 1;
    while ( $i <= 20){
        if( $i % 2 === 0){
            $arr[$i] = $i;
        }
        $i++;
    }
    return $arr;
}

one_to_ten();
echo "factorial = ". factorial(5) . PHP_EOL;
$arr = paired_numbers($arr);
print_r($arr);