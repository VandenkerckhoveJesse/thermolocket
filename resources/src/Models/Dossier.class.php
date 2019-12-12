<?php


class Dossier
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
     * Get the value of verwantschap
     */ 
    public function getVerwantschap()
    {
        return $this->verwantschap;
    }

    /**
     * Get the value of datum
     */ 
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Get the value of gebruiker_id
     */ 
    public function getGebruiker_id()
    {
        return $this->gebruiker_id;
    }

    /**
     * Get the value of woning_id
     */ 
    public function getWoning_id()
    {
        return $this->woning_id;
    }

    /**
     * Get the value of klant_id
     */ 
    public function getKlant_id()
    {
        return $this->klant_id;
    }

    /**
     * Set the value of verwantschap
     *
     * @return  self
     */ 
    public function setVerwantschap($verwantschap)
    {
        $this->verwantschap = $verwantschap;

        return $this;
    }

    /**
     * Set the value of datum
     *
     * @return  self
     */ 
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Set the value of woning_id
     *
     * @return  self
     */ 
    public function setWoning_id($woning_id)
    {
        $this->woning_id = $woning_id;

        return $this;
    }

    /**
     * Set the value of klant_id
     *
     * @return  self
     */ 
    public function setKlant_id($klant_id)
    {
        $this->klant_id = $klant_id;

        return $this;
    }

    /**
     * Set the value of gebruiker_id
     *
     * @return  self
     */ 
    public function setGebruiker_id($gebruiker_id)
    {
        $this->gebruiker_id = $gebruiker_id;

        return $this;
    }
}



