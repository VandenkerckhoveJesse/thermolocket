<?php


class Klant implements Model
{
    private $id;
    private $voornaam;
    private $familienaam;
    private $email;
    private $telefoon;

    public static function create($voornaam,$familienaam,$email,$telefoon)
    {
        $klant = new Klant();
        $klant->setVoornaam($voornaam);
        $klant->setFamillienaam($familienaam);
        $klant->setEmail($email);
        $klant->setTelefoon($telefoon);
        return $klant;   
    }


    public static function getAll()
    {
        $query = "SELECT * FROM klanten";
        try {
            return Database::getInstance()->queryClasses($query, "Klant");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM klanten WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Klant", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {   
        $query = 'UPDATE klanten SET voornaam= :voornaam , familienaam=:familienaam, email=:email,telefoon=:telefoon WHERE id = :id';
        $values = array(":id"=>$this->id,":voornaam" => $this->voornaam,":familienaam" => $this->familienaam,":email" => $this->email,":telefoon" => $this->telefoon);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO klanten(voornaam,familienaam,email,telefoon) values(:voornaam,:familienaam,:email,:telefoon)';
        $values = array(":voornaam" => $this->voornaam,":familienaam" => $this->familienaam,":email" => $this->email,":telefoon" => $this->telefoon);
        try {
            Database::getInstance()->query($query, $values);
            $id = Database::getInstance()->queryLastInsertId();
            return self::getById($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM klanten WHERE id = :id";
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
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param mixed $voornaam
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return mixed
     */
    public function getFamilienaam()
    {
        return $this->familienaam;
    }

    /**
     * @param mixed $familienaam
     */
    public function setFamilienaam($familienaam)
    {
        $this->familienaam = $familienaam;
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
    public function getTelefoon()
    {
        return $this->telefoon;
    }

    /**
     * @param mixed $telefoon
     */
    public function setTelefoon($telefoon)
    {
        $this->telefoon = $telefoon;
    }




}