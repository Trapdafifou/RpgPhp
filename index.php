<?php

require_once "vendor/autoload.php";

$esteban = new \Game\Character();
echo $esteban->life . PHP_EOL;

$guillaume = new Game\Character();
echo $guillaume->life . PHP_EOL;

$esteban->attack($guillaume);
echo $guillaume->life . PHP_EOL;