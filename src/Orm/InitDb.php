<?php

namespace Ormen\Orm;

use PDO;
use PDOException;

class InitDb
{
    /**
     * Init constructor.
     * @param string $settings
     */
    public function __construct(string $settings = 'settings.json')
    {
        $settings = json_decode(file_get_contents($settings));
        $this->settings = $settings;

        $dsn = "mysql:host={$settings->dbhost};dbname={$settings->dbname};charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            return new PDO($dsn, $settings->dbuser, $settings->dbpassword, $options);
        }catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}