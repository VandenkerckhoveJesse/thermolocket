<?php

class Database
{
    public $conn;
    private static $instance = null;

    public function __construct()
    {
        $this->initializeConnection();
    }

    public function __destruct()
    {
        if(isset($this->conn))
        {
            $this->conn = null;
        }

    }

    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    private function initializeConnection()
    {
        try{
            $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;
            $this->conn = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e)
        {
            echo "failed";
            echo "\n $e";
            die(); //todo make this better
        }
    }

}