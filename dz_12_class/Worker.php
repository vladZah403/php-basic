<?php

class Worker
{
    private string $name;
    private string $position;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if(strlen($name) >= 2){
            $this->name = $name;
        }else{
            throw new Exception("Довжина строки менше 2 символів");
        }

    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        if($position == 'manager' ){
            $this->position = $position;
        }elseif ($position == 'developer'){
            $this->position = $position;
        }elseif ($position == 'tester'){
            $this->position = $position;

        }else{
            throw new Exception("Position повинно мати одне з цих значень: manager, developer, tester ");
        }
    }

    public function printDisplay(){
        echo $this->getName() . PHP_EOL;
        echo $this->getPosition() . PHP_EOL;
    }
}