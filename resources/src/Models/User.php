<?php
class User
{
    const ALIASES = "id, naam as name, wachtwoord as password, laatste_login as last_login, email, ingeschakeld as enabled";
    const INSERTUSER = 'INSERT INTO gebruikers (naam, wachtwoord, email, ingeschakeld)
                    VALUES (:name , :password, :email, :enabled)';
    const SELECTUSERBYID = 'SELECT '.self::ALIASES.' FROM gebruikers WHERE (id = :id)';
    const SELECTUSERBYNAME = 'SELECT '.self::ALIASES.' FROM gebruikers WHERE (naam = :name)';
    const SELECTUSERS = 'SELECT '.self::ALIASES.' FROM gebruikers';
    const UPDATEUSER = 'UPDATE gebruikers SET naam = :name, wachtwoord = :password, email = :email, ingeschakeld = :enabled WHERE id = :id';
    const DELETEUSER = 'DELETE FROM gebruikers WHERE id = :id';


    private $id;
    private $name;
    private $password;
    private $last_login;
    private $email;
    private $enabled;


    public static function add($name, $password, $email, $enabled) {
        $conn = Database::getInstance()->conn;
        $name = trim($name);
        $password = trim($password);
        if(!Helper::isUserNameValid($name)) {
            throw new Exception('Invalid username');
        }
        if(!Helper::isPasswordValid($password)) {
            throw new Exception('Invalid password');
        }
        $email = trim($email);
        $enabled = (is_null($enabled) ? true : $enabled);
        $enabled = $enabled ? 1 : 0;
        $query = self::INSERTUSER;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $values = array(':name' => $name, ":password" => $hash, ":email" => $email, ":enabled" => $enabled);
        try{
            $res = $conn->prepare($query);
            $res->execute($values);
        }
        catch (PDOException $e){
            echo $e;
        }

        return self::getById($conn->lastInsertId());
    }

    public static function getAll() {
        $query = self::SELECTUSERS;
        $stmt = Database::getInstance()->conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        return $users;
    }

    public static function getById($id) {
        $query = self::SELECTUSERBYID;
        $values = array(":id" => $id);

        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, 'User');
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Something went wrong');
        }
        $user = $res->fetch();
        return $user;
    }

    public static function getByName($name) {
        $query = self::SELECTUSERBYNAME;
        $values = array(":name" => $name);

        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, 'User');
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Something went wrong');
        }
        $user = $res->fetch();
        return $user;
    }

    public static function edit($id, $name, $password, $email, $enabled) {
        $name = trim($name);
        $password = trim($password);
        if(!Helper::isUserNameValid($name)) {
            throw new Exception('Invalid username');
        }
        if(!Helper::isPasswordValid($password)) {
            throw new Exception('Invalid password');
        }
        $email = trim($email);
        $enabled = (is_null($enabled) ? true : $enabled);
        $query = self::UPDATEUSER;
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $values = array(':id' => $id, ':name' => $name, ':password' => $hash, ':email' => $email, ':enabled' => $enabled);
        try {
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        }
        catch(Exception $e){
            throw new Exception('Database query error');
        }
        return self::getUserById($id);
    }

    public static function delete($id) {
        $query = self::DELETEUSER;
        $values = array(':id' => $id);

        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Database query error');
        }

        try{
            Session::deleteByUserId($id);
        } catch (Exception $e) {
            throw $e;
        }
    }













    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

}

