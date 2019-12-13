<?php


class Sessie implements Model
{
    private $id;
    private $gebruikers_id;
    private $login_tijd;


    public static function getAll()
    {
        $query = "SELECT * FROM sessies";
        try{
            return Database::getInstance()->queryClasses($query, "Sessie");
        } catch (Exception $e) {
             throw $e;
        }
    }

    public static function getById($id)
    {
        $query = "SELECT * FROM sessies WHERE (id = :id) AND (login_tijd >= (NOW() - INTERVAL 30 DAY))";
        $values = array(":id" => $id);
        try {
            return Database::getInstance()->queryClass($query, "Sessie", $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function save()
    {
        $query = 'REPLACE INTO sessies (id, gebruikers_id, login_tijd) VALUES (:id, :gebruikers_id, NOW())';
        $values = array(':id' => $this->id, ':gebruikers_id' => $this->gebruikers_id);
        try {
            Database::getInstance()->query($query, $values);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function add()
    {
        $this->save();
    }

    public function delete()
    {
        $query = "DELETE FROM adressen WHERE id = :id";
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
    public function getGebruikersId()
    {
        return $this->gebruikers_id;
    }

    /**
     * @param mixed $gebruikers_id
     */
    public function setGebruikersId($gebruikers_id)
    {
        $this->gebruikers_id = $gebruikers_id;
    }

    /**
     * @return mixed
     */
    public function getLoginTijd()
    {
        return $this->login_tijd;
    }

    /**
     * @param mixed $login_tijd
     */
    public function setLoginTijd($login_tijd)
    {
        $this->login_tijd = $login_tijd;
    }
}