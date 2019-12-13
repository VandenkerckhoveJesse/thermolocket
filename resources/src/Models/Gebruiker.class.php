<?php


class Gebruiker implements Model
{
    private $id;
    private $naam;
    private $wachtwoord;
    private $laatste_login;
    private $email;
    private $ingeschakeld;

    public static function getAll()
    {
        $query = "SELECT * FROM gebruikers";
        try {
            return Database::getInstance()->queryClasses($query, "Gebruiker");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM gebruikers WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Gebruiker", $values);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function save()
    {
        $query = 'UPDATE gebruikers SET naam = :naam, wachtwoord = :wachtwoord, email = :email, ingeschakeld = :ingeschakeld WHERE id = :id';
        $values = array(":id" => $this->id, ":naam" => $this->naam, ":wachtwoord" => $this->wachtwoord, ":email" => $this->email, ":ingeschakeld" => $this->ingeschakeld);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO gebruikers (naam, wachtwoord, email, ingeschakeld)
                    VALUES (:naam , :wachtwoord, :email, :ingeschakeld)';
        $values = array(":gemeente_id" => $this->gemeente_id, ":straat" => $this->straat,
            ":nummer" => $this->nummer, ":bus" => $this->bus);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM gebruikers WHERE id = :id";
        $values = array(':id' => $this->id);
        try {
            Database::getInstance()->query($query, $values);
        } catch(Exception $e) {
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($name)
    {
        $name = trim($name);
        if(!Helper::isUserNameValid($name)) {
            throw new Exception("Invalid username");
        }
        $this->naam = $name;
    }

    /**
     * @return mixed

    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }
     */
    /**
     * @param mixed $wachtwoord
     */
    public function setWachtwoord($password)
    {
        $password = trim($password);
        if(!Helper::isPasswordValid($password)) {
            throw new Exception('Invalid password');
        }
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->wachtwoord = $hash;
    }

    /**
     * @return mixed
     */
    public function getLaatsteLogin()
    {
        return $this->laatste_login;
    }

    /**
     * @param mixed $laatste_login
     */
    public function setLaatsteLogin($laatste_login)
    {
        $this->laatste_login = $laatste_login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getIngeschakeld()
    {
        return $this->ingeschakeld;
    }

    /**
     * @param mixed $ingeschakeld
     */
    public function setIngeschakeld($ingeschakeld)
    {
        $this->ingeschakeld = $ingeschakeld;
    }


}