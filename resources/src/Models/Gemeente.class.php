<?php


class Gemeente implements Model
{
    private $id;
    private $naam;
    private $postcode;

    public static function create($naam,$postcode){
        $gemeente=new Gemeente();
        $gemeente->setNaam($naam);
        $gemeente->setPostcode($postcode);
        return $gemeente;
    }

    public static function getAll()
    {
        $query = "SELECT * FROM gemeentes";
        try {
            return Database::getInstance()->queryClasses($query, "Gemeente");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM gemeentes WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Gemeente", $values);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function save()
    {
        $query = 'UPDATE gemeentes SET naam = :naam, postcode=:postcode WHERE id = :id';
        $values = array(":id" => $this->id,":naam" => $this->naam, ":postcode" => $this->postcode);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO gemeentes (naam,postcode)
                    VALUES (:naam , :postcode)';
        $values = array(":naam" => $this->naam, ":postcode" => $this->postcode);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM gemeentes WHERE id = :id";
        $values = array(':id' => $this->id);
        try {
            Database::getInstance()->query($query, $values);
        } catch(Exception $e) {
            throw $e;
        }
    }



    /**
     * Get the value of naam
     */ 
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Get the value of postcode
     */ 
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set the value of postcode
     *
     * @return  self
     */ 
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Set the value of naam
     *
     * @return  self
     */ 
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }
}

