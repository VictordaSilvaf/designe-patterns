<?php

namespace Core\Creational\Builder\Conceptual;


interface SmartPhoneInterface
{
    public function reset(): void;
    public function addGPU(): SmartPhoneInterface;
    public function addCPU(): SmartPhoneInterface;
    public function addRAM(): SmartPhoneInterface;
    public function addSensors(): SmartPhoneInterface;
    public function addModel(): SmartPhoneInterface;
    public function getSmartPhone(): SmartPhone;
}
