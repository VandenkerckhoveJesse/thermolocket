<?php


class Session
{
    const ALIASES = "id, gebruikers_id as user_id, login_tijd as login_time";
    const DELETESESSIONSOFUSER = 'DELETE FROM sessies WHERE (gebruikers_id = :user_id)';
    const REPLACESESSION = 'REPLACE INTO sessies (id, gebruikers_id, login_tijd) VALUES (:id, :user_id, NOW())';
    const SELECTSESSIONBYID = 'SELECT '.self::ALIASES.' FROM sessies WHERE (id = :id)';
    const SELECTVALIDSESSIONBYID = 'SELECT '.self::ALIASES.' FROM sessies WHERE (id = :id) AND (login_tijd >= (NOW() - INTERVAL 7 DAY))';

    private $id;
    private $user_id;
    private $login_time;

    public static function replace($session_id, $user_id) {
        $query = self::REPLACESESSION;
        $values = array(':id' => $session_id, ':user_id' => $user_id);
        try {
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        } catch (PDOException $e) {
            throw new Exception('Database query error');
        }
    }

    public static function getById($id) {
        $query = self::SELECTSESSIONBYID;
        $values = array(":id" => $id);

        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, 'Session');
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Something went wrong');
        }
        $session = $res->fetch();
        return $session;
    }

    public static function getValidById($id) {
        $query = self::SELECTVALIDSESSIONBYID;
        $values = array(":id" => $id);

        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->setFetchMode(PDO::FETCH_CLASS, 'Session');
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Something went wrong');
        }
        $session = $res->fetch();
        return $session;
    }

    public static function deleteById($sessionid) {
        $query = 'DELETE FROM sessions WHERE (id = :id)';
        $values = array(':id' => $sessionid);
        try{
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception("Database query error");
        }
    }

    public static function deleteByUserId($user_id) {
        $query = self::DELETESESSIONSOFUSER;
        $values = array(":user_id" => $user_id);

        try {
            $res = Database::getInstance()->conn->prepare($query);
            $res->execute($values);
        } catch(PDOException $e) {
            throw new Exception('Database query error');
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
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getLoginTime()
    {
        return $this->login_time;
    }




}