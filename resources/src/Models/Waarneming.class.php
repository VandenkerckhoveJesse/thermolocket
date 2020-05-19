<?php


class Waarneming implements Model
{
    private $id;
    private $eigenschap_id;
    private $woning_id;
    private $waarneming_type_id;

    public function getWaarnemingType() {
        return WaarnemingType::getById($this->waarneming_type_id);
    }

    public function getEigenschap() {
        return Eigenschap::getById($this->eigenschap_id);
    }

    public static function getAll()
    {
        $query = "SELECT * FROM waarnemingen";
        try {
            return Database::getInstance()->queryClasses($query, "Waarneming");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM waarnemingen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Waarneming", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

     public function save()
    {   
        $query = 'UPDATE waarnemingen SET eigenschap_id= :eigenschap_id , woning_id=:woning_id, waarneming_type_id=:waarneming_type_id WHERE id = :id';
        $values = array(":id"=>$this->id,":eigenschap_id" => $this->eigenschap_id,":woning_id" => $this->woning_id, ":waarneming_id" => $this->waarneming_id);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO waarnemingen(eigenschap_id,woning_id,waarneming_type_id) values(:eigenschap_id,:woning_id,:waarneming_type_id)';
        $values = array(":eigenschap_id" => $this->eigenschap_id,":woning_id" => $this->woning_id, ":waarneming_type_id" => $this->waarneming_type_id);
        
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
        $query = "DELETE FROM waarnemingen WHERE id = :id";
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
    public function getEigenschapId()
    {
        return $this->eigenschap_id;
    }

    /**
     * @param mixed $eigenschap_id
     */
    public function setEigenschapId($eigenschap_id)
    {
        $this->eigenschap_id = $eigenschap_id;
    }

    /**
     * @return mixed
     */
    public function getWoningId()
    {
        return $this->woning_id;
    }

    /**
     * @param mixed $woning_id
     */
    public function setWoningId($woning_id)
    {
        $this->woning_id = $woning_id;
    }

    /**
     * @return mixed
     */
    public function getWaarnemingTypeId()
    {
        return $this->waarneming_type_id;
    }

    /**
     * @param mixed $waarneming_type_id
     */
    public function setWaarnemingTypeId($waarneming_type_id)
    {
        $this->waarneming_type_id = $waarneming_type_id;
    }









}