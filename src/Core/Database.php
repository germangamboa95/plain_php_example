<?php


namespace App\Core;

use PDO;

class Database
{
    protected $connection;
    protected static $instance = null;


    protected function __construct()
    {
        $driver = $_ENV['driver'];
        $host = $_ENV['host'];
        $port = $_ENV['port'];
        $database = $_ENV['database'];
        $dsn = "$driver:host=$host;port=$port;charset=utf8mb4;dbname=$database";
        $username = $_ENV['username'];
        $password = $_ENV['password'];

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return  self::$instance;
    }
}
