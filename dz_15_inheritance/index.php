<?php

require ("TextA.php");
require ("TextB.php");

$testA = new TextA();
$testB = new TextB();

echo $testA->print() . PHP_EOL;
echo $testB->print() . PHP_EOL;