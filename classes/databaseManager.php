<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// This class will manage the connection to the database
// It will be passed on the other classes who need it

class DatabaseManager
{
    // These are private: only this class needs them
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "root";
    private string $dbname = "userdata";
    protected $conn;

    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
  //  public PDO $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
        // TODO: Set any user and password information
        {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
                $options = [PDO::ATTR_PERSISTENT => true];
                $this->conn = new PDO($dsn, $this->user, $this->password, $options);
            } catch (PDOException $e) {
                echo "Connection error: " . $e->getMessage();
            }
        }

/*
    public function connect(): void
    {
        // TODO: make the connection to the database
        $this->connection = null;
    }
*/
}

