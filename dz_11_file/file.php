<?php

class file
{
    private string $file_name;

    private string $str;

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->file_name;
    }

    /**
     * @param string $file_name
     */
    public function setFileName(string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    public function file_write(string $str, string $file_name ):void
    {

        $file = fopen($file_name, 'a');
        fwrite($file, $str);
        fclose($file);
    }
    function file_read(string $file_name):array
    {
        $str_arr = [];
        $file = fopen($file_name, 'r');
        while (($line = fgets($file)) !== false){
            array_push($str_arr,$line);
        }
        fclose($file);
        return $str_arr;
    }

}