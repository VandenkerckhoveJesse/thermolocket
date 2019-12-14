<?php


class Dossier implements Model
{
    private $id;
    private $klant_id;
    private $woning_id;
    private $gebruiker_id;
    private $datum;
    private $verwantschap;

    public static function create($klant_id,$woning_id,$gebruiker_id,$datum,$verwantschap)
    {
        $dossier = new Dossier();
        $dossier->setKlant_id($klant_id);
        $dossier->setWoning_id($woning_id);
        $dossier->setGebruiker_id($gebruiker_id);
        $dossier->setDatum($datum);
        $dossier->setVerwantschap($verwantschap);
        return $dossier;
        
    }

    public static function getAll()
    {
        $query = "SELECT * FROM dossiers";
        try {
            return Database::getInstance()->queryClasses($query, "Dossier");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM dossiers WHERE (id = :id)";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Dossier", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'UPDATE dossiers SET klant_id = :klant_id, woning_id = :woning_id, gebruiker_id = :gebruiker_id, datum = :datum,verwantschap =:verwantschap WHERE id = :id';
        $values = array(":id" => $this->id, ":klant_id" => $this->klant_id, ":woning_id" => $this->woning_id, ":gebruiker_id" => $this->gebruiker_id, ":datum" => $this->datum,":verwantschap"=>$this->verwantschap);

        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $query = 'INSERT INTO dossiers(klant_id,woning_id,gebruiker_id,datum,verwantschap) values(:klant_id, :woning_id,:gebruiker_id,:datum,:verwantschap)';
        $values = array(":klant_id" => $this->klant_id, ":woning_id" => $this->woning_id, ":gebruiker_id" => $this->gebruiker_id, ":datum" => $this->datum,":verwantschap"=>$this->verwantschap);
        
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $query = "DELETE FROM dossiers WHERE id = :id";
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
    public function getKlantId()
    {
        return $this->klant_id;
    }

    /**
     * @param mixed $klant_id
     */
    public function setKlantId($klant_id)
    {
        $this->klant_id = $klant_id;
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
    public function getGebruikerId()
    {
        return $this->gebruiker_id;
    }

    /**
     * @param mixed $gebruiker_id
     */
    public function setGebruikerId($gebruiker_id)
    {
        $this->gebruiker_id = $gebruiker_id;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @return mixed
     */
    public function getVerwantschap()
    {
        return $this->verwantschap;
    }

    /**
     * @param mixed $verwantschap
     */
    public function setVerwantschap($verwantschap)
    {
        $this->verwantschap = $verwantschap;
    }


}



