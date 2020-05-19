<?php


class WaarnemingType implements Model
{
    private $id;
    private $titel;
    private $kleur;




    public static function getAll()
    {
        $query = "SELECT * FROM waarneming_types";
        try {
            return Database::getInstance()->queryClasses($query, "WaarnemingType");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM waarneming_types WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "WaarnemingType", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'UPDATE waarneming_types SET titel= :titel , kleur=:kleur WHERE id = :id';
        $values = array(":id"=>$this->id,":titel" => $this->titel,":kleur" => $this->kleur);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO waarneming_types(titel,kleur) values(:titel,:kleur)';
        $values = array(":titel" => $this->titel,":kleur" => $this->kleur);

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
        $query = "DELETE FROM waarneming_types WHERE id = :id";
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
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param mixed $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return mixed
     */
    public function getKleur()
    {
        return $this->kleur;
    }

    /**
     * @param mixed $kleur
     */
    public function setKleur($kleur)
    {
        $this->kleur = $kleur;
    }






}