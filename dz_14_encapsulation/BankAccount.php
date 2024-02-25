<?php

class BankAccount
{
    private string $number;
    private int $balance;

    public function __construct(string $number, int $balance)
    {
        $this->number = $number;
        $this->setBalance($balance);


    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    private function setBalance(int $balance): void
    {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new Exception('Баланис не може бути відемним значенням');
        }

    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function replenishment(int $number): void
    {
        if ($number > 0) {
            $this->balance += $number;

        } else {
            throw new Exception('Неможливо поповнити баланис сумою меншою за 1');
        }

    }

    public function withdrawalMoney(int $number): void
    {
        if ($number <= $this->balance && $number > 0) {
            $this->balance -= $number;
        } else {
            throw new Exception('Неможливо зняти кошти');
        }
    }

}