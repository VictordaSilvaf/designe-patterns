<?php

use Core\Creational\Builder\Conceptual\Request\BuilderRequests;
use Core\Creational\Builder\Conceptual\Request\MethodsEnum;

require_once '../vendor/autoload.php';
// DbConnection::getConnection();

// $iphone12 = new SmartPhoneBuilder(
//     smartPhone: new ApplePhone(),
//     data: [
//         'gpu' => 'XPTO',
//         'cpu' => 'XPTO',
//         'ram' => 16,
//         'sensors' => ['XPTO'],
//         'model' => 'XPTO',
//     ]
// );

// $iphone12->getSmartPhone();

// $request = new BuilderRequests;

// $request->url('viacep.com.br/ws/01001000/json/');
// $request->method(MethodsEnum::GET);
// $request->payload(['']);
// $request->build();

$request = (new BuilderRequests)
    ->url('viacep.com.br/ws/01001000/json/')
    ->method(MethodsEnum::GET)
    ->build();
