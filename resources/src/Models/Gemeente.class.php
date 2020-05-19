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
            $id = Database::getInstance()->queryLastInsertId();
            return self::getById($id);
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
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }




}

