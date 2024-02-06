<?php

function callback_sum(int $num1, int $num2,  closure $num3 = null) {
    $result = $num1 * $num1;
    if ($num3 !== null) {
        $result = $num3($result);
    }
    return $result;
}

$printArgument = function($x) {
    echo $x;
};

echo callback_sum(2, 3). PHP_EOL;

echo callback_sum(2, 3, $printArgument(4)). PHP_EOL;
