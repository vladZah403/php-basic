<?php

class BankAccount
{
    private string $number;
    private int $balance;

    public function __construct()
    {
        $this->number = rand(100,900);
        $this->balance = 0;
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
    public function setBalance(int $balance): void
    {
            $this->balance = $balance;
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
        if( $number > 0 ){
            $this->balance += $number;
            echo "Рахунок поповнено на  : ". $number. " Ваш баланс : ". $this->balance. PHP_EOL;
        }else{
            throw new Exception('Неможливо поповнити баланис сумою меншою за 1');
        }

    }

    public function withdrawalMoney (int $number):void
    {
        if( $number <= $this->balance){
            $this->balance -= $number;
            echo "Знято : ". $number. " Залишок : ". $this->balance.PHP_EOL;
        }else{
            throw new Exception('Неможливо зняти кошти');
        }
    }

}