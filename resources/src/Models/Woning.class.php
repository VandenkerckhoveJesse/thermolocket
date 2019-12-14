<?php


class Woning implements Model
{
    private $id;
    private $adres_id;
    private $bouwjaar;

    public static function getAll()
    {
        $query = "SELECT * FROM woningen";
        try {
            return Database::getInstance()->queryClasses($query, "Woning");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM woningen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Woning", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'UPDATE woningen SET adres_id = :adres_id, bouwjaar = :bouwjaar WHERE id = :id';
        $values = array(":id" => $this->id, ":adres_id" => $this->adres_id, ":bouwjaar" => $this->bouwjaar);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO woningen (adres_id, bouwjaar)
                    VALUES (:adres_id , :bouwjaar)';
        $values = array(":adres_id" => $this->adres_id, ":bouwjaar" => $this->bouwjaar);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM woningen WHERE id = :id";
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
    public function getAdresId()
    {
        return $this->adres_id;
    }

    /**
     * @param mixed $adres_id
     */
    public function setAdresId($adres_id)
    {
        $this->adres_id = $adres_id;
    }

    /**
     * @return mixed
     */
    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }

    /**
     * @param mixed $bouwjaar
     */
    public function setBouwjaar($bouwjaar)
    {
        $this->bouwjaar = $bouwjaar;
    }


}