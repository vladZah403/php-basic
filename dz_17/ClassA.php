<?php

require_once "ClassTrait.php";

class ClassA
{
    use ClassTrait;
    public function printClassA() : string
    {
        return "Hello ClassA" . PHP_EOL;
    }
}