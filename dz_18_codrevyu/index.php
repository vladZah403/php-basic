<?php
require_once "Worker.php";
try {
    $worker = new Worker();

    $worker->setName('Vlad');
    $worker->setPosition('developer');

    $worker->printDisplay();
} catch (Exception $e) {
    echo 'Помилка: ' . $e->getMessage();
}
