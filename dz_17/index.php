<?php

require_once "ClassA.php";
require_once "ClassB.php";

$a = new ClassA();
echo $a->print();
echo $a->printClassA();

$b = new ClassB();
echo $b->print();
echo $b->printClassB();