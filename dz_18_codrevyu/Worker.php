<?php

// Імена класів і методів повинні бути описані з використанням кемелкейсу
// Коментарі docblock для методів повинні бути детальними, вказувати типи даних параметрів та типи повернення.
class Worker
{
    private string $name;
    private string $position;

    /**
     * Отримує ім'я працівника.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Встановлює ім'я працівника.
     *
     * @param string $name
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (strlen($name) >= 2) {
            $this->name = $name;
        } else {
            throw new Exception("Довжина строки менше 2 символів");
        }
    }

    /**
     * Отримує посаду працівника.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Встановлює посаду працівника.
     *
     * @param string $position
     * @throws Exception
     */
    public function setPosition(string $position): void
    {
        $allowedPositions = ['manager', 'developer', 'tester'];
        if (in_array($position, $allowedPositions)) {
            $this->position = $position;
        } else {
            throw new Exception("Position повинно мати одне з цих значень: manager, developer, tester ");
        }
    }

    /**
     * Виводить ім'я та посаду працівника.
     */
    public function printDisplay(): void
    {
        echo $this->getName() . PHP_EOL;
        echo $this->getPosition() . PHP_EOL;
    }
}
