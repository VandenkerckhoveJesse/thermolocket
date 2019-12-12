<?php


class Waarneming implements Model
{
    private $id;
    private $titel;
    private $kleur;

    public static function create($titel,$kleur)
    {
        $waarneming = new Waarneming();
        $waarneming->titel=$titel;
        $waarneming->kleur=$kleur;
        return $waarneming;
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
        $query = 'UPDATE waarnemingen SET titel= :titel , kleur=:kleur WHERE id = :id';
        $values = array(":id"=>$this->id,":titel" => $this->titel,":kleur" => $this->kleur);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO waarnemingen(titel,kleur) values(:titel,:kleur)';
        $values = array(":titel" => $this->titel,":kleur" => $this->kleur);
        
        try {
            Database::getInstance()->query($query, $values);
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
     * Set the value of titel
     *
     * @return  self
     */ 
    public function setTitel($titel)
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * Set the value of kleur
     *
     * @return  self
     */ 
    public function setKleur($kleur)
    {
        $this->kleur = $kleur;

        return $this;
    }

    /**
     * Get the value of kleur
     */ 
    public function getKleur()
    {
        return $this->kleur;
    }

    /**
     * Get the value of titel
     */ 
    public function getTitel()
    {
        return $this->titel;
    }
}