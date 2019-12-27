<?php


class Categorie implements Model
{
    private $id;
    private $input_type_id;
    private $titel;
    private $gewicht;
    private $geactiveerd;

    public function getEigenschappen() {
        $query = "SELECT * FROM eigenschappen WHERE (categorie_id = :categorie_id)";
        $values = array(":categorie_id" => $this->id);
        try {
            return Database::getInstance()->queryClasses($query, "Eigenschap", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getSubcategorieen() {
        $query = "SELECT * FROM categorieen WHERE id IN 
                (SELECT subcategorie_id FROM is_subcategorie_van WHERE (categorie_id = :categorie_id))";
        $values = array(":categorie_id" => $this->id);
        try {
            return Database::getInstance()->queryClasses($query, "Categorie", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getAll()
    {
        $query = "SELECT * FROM categorieen";
        try {
            return Database::getInstance()->queryClasses($query, "Categorie");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM categorieen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Categorie", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'UPDATE categorieen SET input_type_id = :input_type_id, titel = :titel, gewicht = :gewicht, geactiveerd = :geactiveerd WHERE id = :id';
        $values = array(":id" => $this->id, ":input_type_id" => $this->input_type_id,
            ":titel" => $this->titel, ":gewicht" => $this->gewicht, ":geactiveerd" => $this->geactiveerd);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO categorieen (input_type_id, titel, gewicht, geactiveerd)
                    VALUES (:input_type_id , :titel, :gewicht, :geactiveerd)';
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
        $query = "DELETE FROM categorieen WHERE id = :id";
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
    public function getInputTypeId()
    {
        return $this->input_type_id;
    }

    /**
     * @param mixed $input_type_id
     */
    public function setInputTypeId($input_type_id)
    {
        $this->input_type_id = $input_type_id;
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
    public function getGewicht()
    {
        return $this->gewicht;
    }

    /**
     * @param mixed $gewicht
     */
    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;
    }

    /**
     * @return mixed
     */
    public function getGeactiveerd()
    {
        return $this->geactiveerd;
    }

    /**
     * @param mixed $geactiveerd
     */
    public function setGeactiveerd($geactiveerd)
    {
        $this->geactiveerd = $geactiveerd;
    }


}