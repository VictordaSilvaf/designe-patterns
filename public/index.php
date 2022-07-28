<?php

require_once '../vendor/autoload.php';

use Core\Creational\Singleton\Conceitual\Singleton;

$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();
var_dump($instanceA === $instanceB);
