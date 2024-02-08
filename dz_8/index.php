<?php
$arr = [];
function arr_rand(array $arr, int $arr_length, int $min, int $max)
{

    for ($i = 0; $i < $arr_length; $i++) {
        $arr[$i] = mt_rand($min,$max);
    }
    return $arr;
}


$arr = arr_rand( $arr,10, 5, 20);
print_r($arr);

echo "max = ".max($arr).PHP_EOL;
echo "min = ".min($arr).PHP_EOL;

asort($arr);
print_r($arr);