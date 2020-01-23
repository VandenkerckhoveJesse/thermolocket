<?php


class Adres implements Model
{
    private $id;
    private $gemeente_id;
    private $straat;
    private $nummer;
    private $bus;

    public function getFullAdres() {
        return $this->getGemeente()->getNaam()." ". $this->getStraat()." ".$this->getNummer();
    }

    public function getGemeente() {
        return Gemeente::getById($this->gemeente_id);
    }


    public static function getAll()
    {
        $query = "SELECT * FROM adressen";
        try {
            return Database::getInstance()->queryClasses($query, "Adres");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM adressen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Adres", $values);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function save()
    {
        $query = 'UPDATE adressen SET gemeente_id = :gemeente_id, straat = :straat, nummer = :nummer, bus = :bus WHERE id = :id';
        $values = array(":id" => $this->id, ":gemeente_id" => $this->gemeente_id, ":straat" => $this->straat, ":nummer" => $this->nummer, ":bus" => $this->bus);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO adressen (gemeente_id, straat, nummer, bus)
                    VALUES (:gemeente_id , :straat, :nummer, :bus)';
        $values = array(":gemeente_id" => $this->gemeente_id, ":straat" => $this->straat,
            ":nummer" => $this->nummer, ":bus" => $this->bus);
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
        $query = "DELETE FROM adressen WHERE id = :id";
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
     * @return mixed
     */
    public function getGemeenteId()
    {
        return $this->gemeente_id;
    }

    /**
     * @param mixed $gemeente_id
     */
    public function setGemeenteId($gemeente_id)
    {
        $this->gemeente_id = $gemeente_id;
    }

    /**
     * @return mixed
     */
    public function getStraat()
    {
        return $this->straat;
    }

    /**
     * @param mixed $straat
     */
    public function setStraat($straat)
    {
        $this->straat = $straat;
    }

    /**
     * @return mixed
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * @param mixed $nummer
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;
    }

    /**
     * @return mixed
     */
    public function getBus()
    {
        return $this->bus;
    }

    /**
     * @param mixed $bus
     */
    public function setBus($bus)
    {
        $this->bus = $bus;
    }


}