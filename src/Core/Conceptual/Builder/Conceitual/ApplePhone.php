<?php

namespace Core\Creational\Builder\Conceptual;

final class ApplePhone extends SmartPhone
{
    public function __construct(
        protected ?string $gpu = null,
        protected ?string $cpu = null,
        protected ?int $ram = null,
        protected ?array $sensors = null,
        protected ?string $model = null
    ) {
    }
}
