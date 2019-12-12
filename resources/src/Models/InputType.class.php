<?php


class InputType implements Model
{
    private $id;
    private $titel;

    public static function create($titel)
    {
      $inputType = new InputType();
      $inputType->titel=$titel;
      return $inputType;
        
    }

    public static function getAll()
    {
        $query = "SELECT * FROM input_types";
        try {
            return Database::getInstance()->queryClasses($query, "InputType");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM input_types WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "InputType", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

     public function save()
    {   
        $query = 'UPDATE input_types SET titel = :titel WHERE id = :id';
        $values = array(":id"=>$this->id,":titel" => $this->titel);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO input_types(titel) values(:titel)';
       $values = array(":titel" => $this->titel);
        
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM input_types WHERE id = :id";
        $values = array(':id' => $this->id);
        try {
            Database::getInstance()->query($query, $values);
        } catch(Exception $e) {
            throw $e;
        }
    }


    

    /**
     * Get the value of titel
     */ 
    public function getTitel()
    {
        return $this->titel;
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
}