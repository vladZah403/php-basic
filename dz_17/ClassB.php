<?php

require_once "ClassTrait.php";

class ClassB
{
    use ClassTrait;
    public function printClassB() : string
    {
      return "Hello ClassB" . PHP_EOL;
    }

}