<?php

namespace Core\Creational\Singleton\Practical;

use stdClass;

class DbConnection extends Singleton
{
    private ?stdClass $conn = null;

    protected function __construct()
    {
        var_dump('Connectou ao db às ' . date('YmdHis'));
        $this->conn = new stdClass("mysql:host=lcoalhost, dbname=design_patterns", 'user_db', 'user_pass');
    }

    public static function getConnection(): stdClass
    {
        $instance = static::getInstance();

        return $instance->conn;
    }
}
