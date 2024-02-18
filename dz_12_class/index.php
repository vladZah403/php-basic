<?php
require ("Worker.php");


$worker = new Worker();

$worker->setName('Vlad');
$worker->setPosition('developer');

$worker->printDisplay();
