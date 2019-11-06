<?php


class Session
{
    const DELETESESSIONSOFUSER = 'DELETE FROM user_sessions WHERE (user_id = :user_id)';
    const REPLACESESSION = 'REPLACE INTO sessions (id, user_id, login_time) VALUES (:id, :user_id, NOW())';

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

    public static function deleteByUserId($userid) {
        $query = self::DELETESESSIONSOFUSER;
        $values = array(":user_id" => $userid);

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