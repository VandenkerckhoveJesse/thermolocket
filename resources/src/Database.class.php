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

    public function query($query, $values = array()) {
        try {
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        } catch(PDOException $e) {
            echo $e->getMessage();
            throw new Exception('Query error');
        }
    }


    public function queryClass($query, $className, $values = array()) {
        try {
            $res = Database::getInstance()->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, $className);
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception("Query error");
        }
        $object = $res->fetch();
        return $object;
    }

    public function queryClasses($query, $className, $values = array()) {
        //todo make this more versitale with $values
        try {
            $stmt = Database::getInstance()->conn->query($query);
            $objects = $stmt->fetchAll(PDO::FETCH_CLASS, $className);
            return $objects;
        } catch (PDOException $e) {
            throw new Exception("Query error");
        }
    }

}