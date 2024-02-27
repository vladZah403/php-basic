<?php

class TextB extends TextA
{
    public function print()
    {
        return strtoupper($this->text)  ;
    }

}