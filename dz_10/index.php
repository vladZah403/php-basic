<?php
function fibonacci(int $x): Generator
{
    $fib1 = $fib2 = 1;
    yield  $fib1;
    yield $fib2;

    for ($i = 1; $i < $x -1   ; $i++) {
        $fib_sum = $fib1 +$fib2;
        $fib1 = $fib2;
        $fib2 = $fib_sum;
        yield $fib_sum;
    }
}

$generator_fibonacci = fibonacci(10);
foreach ($generator_fibonacci as $value) {
    echo $value . PHP_EOL;
}


