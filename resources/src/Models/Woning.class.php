<?php


class Woning implements Model
{
    private $id;
    private $adres_id;
    private $bouwjaar_id;
    private $verwarmd;

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
        $query = 'UPDATE woningen SET adres_id = :adres_id, bouwjaar_id = :bouwjaar_id, verwarmd = :verwarmd WHERE id = :id';
        $values = array(":id" => $this->id, ":adres_id" => $this->adres_id, ":bouwjaar_id" => $this->bouwjaar_id, ":verwarmd" => $this->verwarmd);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO woningen (adres_id, bouwjaar_id, verwarmd)
                    VALUES (:adres_id , :bouwjaar_id, :verwarmd)';
        $values = array(":adres_id" => $this->adres_id, ":bouwjaar_id" => $this->bouwjaar_id, ":verwarmd" => $this->verwarmd);
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
    public function getBouwjaarId()
    {
        return $this->bouwjaar_id;
    }

    /**
     * @param mixed $bouwjaar
     */
    public function setBouwjaarId($bouwjaar_id)
    {
        $this->bouwjaar_id = $bouwjaar_id;
    }

    /**
     * @return mixed
     */
    public function getVerwarmd()
    {
        return $this->verwarmd;
    }

    /**
     * @param mixed $verwarmd
     */
    public function setVerwarmd($verwarmd)
    {
        $this->verwarmd = $verwarmd;
    }




}