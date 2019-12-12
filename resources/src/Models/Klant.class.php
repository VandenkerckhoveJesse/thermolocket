<?php


class Klant implements Model
{
    private $id;
    private $voornaam;
    private $famillienaam;
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
     * Get the value of voornaam
     */ 
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Get the value of famillienaam
     */ 
    public function getFamillienaam()
    {
        return $this->famillienaam;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of telefoon
     */ 
    public function getTelefoon()
    {
        return $this->telefoon;
    }

    /**
     * Set the value of telefoon
     *
     * @return  self
     */ 
    public function setTelefoon($telefoon)
    {
        $this->telefoon = $telefoon;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of famillienaam
     *
     * @return  self
     */ 
    public function setFamillienaam($famillienaam)
    {
        $this->famillienaam = $famillienaam;

        return $this;
    }

    /**
     * Set the value of voornaam
     *
     * @return  self
     */ 
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }
}