<?php

require_once '../vendor/autoload.php';

use Core\Creational\Singleton\Practical\DbConnection;

/* $instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();
var_dump($instanceA === $instanceB);
 */

DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
DbConnection::getConnection();
