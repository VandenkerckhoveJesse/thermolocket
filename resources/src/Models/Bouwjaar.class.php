<?php


class Bouwjaar implements Model
{

    private $id;
    private $top;
    private $bottom;

    public static function getAll()
    {
        $query = "SELECT * FROM bouwjaren";
        try {
            return Database::getInstance()->queryClasses($query, "Bouwjaar");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM bouwjaren WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Bouwjaar", $values);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public function save()
    {
        $query = 'UPDATE bouwjaren SET top = :top, bottom = :bottom WHERE id = :id';
        $values = array(":id" => $this->id, ":top" => $this->top, ":bottom" => $this->bottom);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO bouwjaren (top, bottom)
                    VALUES (:top , :bottom)';
        $values = array(":top" => $this->top, ":bottom" => $this->bottom);
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
        $query = "DELETE FROM bouwjaren WHERE id = :id";
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
    public function getTop()
    {
        return $this->top;
    }

    /**
     * @param mixed $top
     */
    public function setTop($top)
    {
        $this->top = $top;
    }

    /**
     * @return mixed
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * @param mixed $bottom
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;
    }


}