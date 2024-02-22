<?php

require ("BankAccount.php");

$user1 = new BankAccount();

echo "Введіть сумму на яку бажаете поповнити рахунок".PHP_EOL;
$sum = fgets(STDIN);

try {
    $user1 ->replenishment($sum);
}catch (Exception $e){
    echo 'Выброшено исключение: ',  $e->getMessage(). PHP_EOL;
}

echo "Введіть сумму яку бажаете зняти з рахунку".PHP_EOL;
$sum = fgets(STDIN);
try {
    $user1 ->withdrawalMoney($sum);
}catch (Exception $e){
    echo 'Выброшено исключение: ',  $e->getMessage(). PHP_EOL;
}


var_dump($user1);