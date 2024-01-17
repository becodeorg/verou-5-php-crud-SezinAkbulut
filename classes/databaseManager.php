<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class DatabaseManager
{
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "root";
    private string $dbname = "userdata";
    protected $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
            $options = [PDO::ATTR_PERSISTENT => true];
            $this->conn = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }

    public function connect(): PDO
    {
        if ($this->conn instanceof PDO) {
            return $this->conn;
        }

        throw new Exception("Database connection not established.");
    }
}


