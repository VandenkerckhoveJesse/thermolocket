<?php


class Eigenschap implements Model
{
    private $id;
    private $categorie_id;
    private $beschrijving;

    public static function create($categorie_id,$beschrijving)
    {
      $eigenschap = new Eigenschap();
      $eigenschap->setCategorie_id($categorie_id);
      $eigenschap->setBeschrijving($beschrijving);
      return $eigenschap;
        
    }

    public static function getAll()
    {
        $query = "SELECT * FROM eigenschappen";
        try {
            return Database::getInstance()->queryClasses($query, "Eigenschap");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM eigenschappen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Eigenschap", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

     public function save()
    {   
        $query = 'UPDATE eigenschappen SET categorie_id = :categorie_id, beschrijving=:beschrijving WHERE id = :id';
        $values = array(":id"=>$this->id,":categorie_id" => $this->categorie_id, ":beschrijving" => $this->beschrijving);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO eigenschappen(categorie_id,beschrijving) values(:categorie_id,:beschrijving)';
       $values = array(":categorie_id" => $this->categorie_id, ":beschrijving" => $this->beschrijving);
        
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
        $query = "DELETE FROM eigenschappen WHERE id = :id";
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
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @param mixed $categorie_id
     */
    public function setCategorieId($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    /**
     * @return mixed
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * @param mixed $beschrijving
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    }




}