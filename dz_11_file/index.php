<?php

define("FILE_NAME", "test.txt");

function file_write(string $str):void
{
    $file = fopen(FILE_NAME, 'a');
    fwrite($file, $str);
    fclose($file);
}

function file_read():array
{
    $str_arr = [];
    $file = fopen(FILE_NAME, 'r');
    $i = 0;
    while (($line = fgets($file)) !== false){
        $str_arr[$i] = $line;
        $i++;
    }
    fclose($file);
    return $str_arr;
}


echo "Введіть текст для запису в файл".PHP_EOL;
$str = fgets(STDIN);
file_write($str);


$arr_string_file = file_read();
echo "Останій аргумент введений в файл : ";
echo $arr_string_file[count($arr_string_file)-1];
