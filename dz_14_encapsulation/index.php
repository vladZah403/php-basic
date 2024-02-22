<?php

require("BankAccount.php");
try {
    $user1 = new BankAccount(321, 200);
}catch (Exception $e){
    echo 'Помилка: ', $e->getMessage() . PHP_EOL;
    exit;
}

echo "Введіть сумму на яку бажаете поповнити рахунок" . PHP_EOL;
$sum = fgets(STDIN);

try {
    $user1->replenishment($sum);
    echo "Рахунок поповнено на  : " . $sum . " Ваш баланс : " . $user1->getBalance() . PHP_EOL;
} catch (Exception $e) {
    echo 'Помилка: ', $e->getMessage() . PHP_EOL;
    exit;
}

echo "Введіть сумму яку бажаете зняти з рахунку" . PHP_EOL;
$sum = fgets(STDIN);
try {
    $user1->withdrawalMoney($sum);
    echo "Знято : " . $sum . " Залишок : " . $user1->getBalance() . PHP_EOL;
} catch (Exception $e) {
    echo 'Помилка: ', $e->getMessage() . PHP_EOL;
    exit;
}


var_dump($user1);