<?php

class TextA
{
    protected string $text = "some text";

    public function print()
    {
       return ucfirst($this->text)  ;
    }
}