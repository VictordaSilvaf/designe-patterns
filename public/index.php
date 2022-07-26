<?php

use Core\Creational\Builder\Conceptual\ApplePhone;
use Core\Creational\Builder\Conceptual\SmartPhoneBuilder;
use Core\Creational\Singleton\Practical\DbConnection;

require_once '../vendor/autoload.php';

// DbConnection::getConnection();

$iphone12 = new SmartPhoneBuilder(
    smartPhone: new ApplePhone(),
    data: [
        'gpu' => 'XPTO',
        'cpu' => 'XPTO',
        'ram' => 16,
        'sensors' => ['XPTO'],
        'model' => 'XPTO',
    ]
);

$iphone12->getSmartPhone();
