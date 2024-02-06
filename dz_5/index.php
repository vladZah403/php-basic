<?php

$str = "Привіт Влад. Як справи. ";

function str_check($str)
{
    $str_length  =mb_strlen($str);
    echo "довжина рядка =  $str_length" .PHP_EOL;
    $str_count = null;
    if($str_length>20)
    {
      $str_count = substr_count($str, ". ");
      echo "кількість речень  =  $str_count" .PHP_EOL;
    }
    if($str_count>= 2)
    {
        echo stristr($str, '. ', true) .PHP_EOL;
    }else{
        echo 'рядок  має 1 речення' .PHP_EOL;
    }


}
str_check($str);
