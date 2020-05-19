<?php


class Afbeelding implements Model
{
    private $id;
    private $woning_id;
    private $folder;
    private $richting;
    private $nummer;


    public static function getAll()
    {
        $query = "SELECT * FROM afbeeldingen";
        try {
            return Database::getInstance()->queryClass($query, "Afbeelding");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM afbeeldingen WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Afbeelding", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'UPDATE afbeeldingen SET woning_id = :woning_id, folder = :folder, richting = :richting, nummer = :nummer WHERE id = :id';
        $values = array(":id" => $this->id, ":woning_id" => $this->woning_id, ":folder" => $this->folder, ":richting" => $this->richting, ":nummer" => $this->nummer);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO afbeeldingen (woning_id, folder, richting, nummer)
                    VALUES (:woning_id , :folder, :richting, :nummer)';
        $values = array(":woning_id" => $this->woning_id, ":folder" => $this->folder,
            ":richting" => $this->richting, ":nummer" => $this->nummer);
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
        $query = "DELETE FROM afbeeldingen WHERE id = :id";
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
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param mixed $folder
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    }

    /**
     * @return mixed
     */
    public function getRichting()
    {
        return $this->richting;
    }

    /**
     * @param mixed $richting
     */
    public function setRichting($richting)
    {
        $this->richting = $richting;
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




}