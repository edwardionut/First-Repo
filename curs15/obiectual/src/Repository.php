<?php

namespace Obiectual;

use PDO;

abstract class Repository
{
    protected PDO $pdo;
    const DSN = 'mysql:host=localhost;dbname=curs15';
    const USER = 'root';
    const PASSWORD = '';

    public function __construct()
    {
        $this->pdo = new PDO(
            self::DSN,
            self::USER,
            self::PASSWORD
        );
    }
}