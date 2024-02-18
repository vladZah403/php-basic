<?php

require ("file.php");

$file = new file();
$file_name = "test.txt";

echo "Введіть текст для запису в файл".PHP_EOL;
$str = fgets(STDIN);
$file->file_write($str,$file_name);

$arr_string_file = $file->file_read($file_name);
echo "Останій аргумент введений в файл : ";
echo $arr_string_file[count($arr_string_file)-1];
