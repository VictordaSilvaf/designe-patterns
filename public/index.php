<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequests;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;

require_once '../vendor/autoload.php';

use Core\Creational\Builder\Practical\Enums\Role;
use Core\Creational\Builder\Practical\UserBuilder;

require_once '../vendor/autoload.php';

$user = (new UserBuilder)
    ->addBasicInfo(
        firstName: 'Carlos',
        lastName: 'Ferreira',
        email: 'carlos@especializati.com.br',
        age: 29,
        role: Role::F,
    )
    ->addAddress(
        street: 'Rua x',
        city: 'City X',
        state: 'State X',
        postalCode: 5757009,
        country: 'BR',
    )
    ->addPhone(
        ddd: 64,
        number: 981701406,
    )
    ->build();

/**
 * Singleton Conceitual
 */

/* 
$instanceA = Singleton::getInstance();
$instanceB = Singleton::getInstance();
var_dump($instanceA === $instanceB);

$instance = DbConnection::getInstance();
DbConnection::getInstance();
DbConnection::getInstance();
DbConnection::getInstance();
DbConnection::getInstance();
DbConnection::getInstance(); 
*/
