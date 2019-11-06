<?php

class Database
{
    const INSERTUSER = 'INSERT INTO users (name, password, email, enabled) 
                    VALUES (:name , :password, :email, :enabled)';
    const SELECTUSER = 'SELECT * FROM users WHERE (id = :id)';
    const SELECTUSERS = 'SELECT * FROM users';
    const UPDATEUSER = 'UPDATE users SET name = :name, password = :password, email = :email, enabled = :enabled WHERE id = :id';

    private $conn;
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
            echo "connected";
        } catch (PDOException $e)
        {
            echo "failed";
            echo "\n $e";
            die(); //todo make this better
        }
    }

    /*
     * User functions
     */
    public function addUser($name, $password, $email, $enabled) {
        $name = trim($name);
        $password = trim($password);
        if(!$this->isUserNameValid($name)) {
            throw new Exception('Invalid username');
        }
        if(!$this->isPasswordValid($password)) {
            throw new Exception('Invalid password');
        }
        $email = trim($email);
        $enabled = (is_null($enabled) ? true : $enabled);
        $query = self::INSERTUSER;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $values = array(':name' => $name, ":password" => $hash, ":email" => $email, ":enabled" => $enabled);
        try{
            $res = $this->conn->prepare($query);
            $res->execute($values);
        }
        catch (PDOException $e){
            echo $e;
        }

        return $this->getUser($this->conn->lastInsertId());
    }

    public function getUsers() {
        $query = self::SELECTUSERS;
        $stmt = $this->conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        return $users;
    }

    public function getUser($id) {
        $query = self::SELECTUSER;
        $values = array(":id" => $id);

        try{
            $res = $this->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, 'User');
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Something went wrong');
        }
        $user = $res->fetch();
        return $user;
    }

    public function editUser($id, $name, $password, $email, $enabled) {
        $query = self::UPDATEUSER;
        $values = array(':id' => $id, ':name' => $name, ':password' => $password, ':email' => $email, ':enabled' => $enabled);
        try {
            //todo jesse doe hier verder
        }
    }

    private function isPasswordValid($password) {
        //todo password validation here
        return true;
    }

    private function isUserNameValid($username) {
        //todo username validation here
        return true;
    }



}