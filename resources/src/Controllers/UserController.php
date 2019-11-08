<?php
include_once '../resources/src/Models/User.php';
include_once '../resources/src/Models/Session.php';
class UserController
{

    public function login($name, $password) {
        $name = trim($name);
        $password = trim($password);
        try{
            $user = User::getByName($name);
        } catch (Exception $e) {
            return false;
        }
        if(!get_class($user) == 'User') {
            return false;
        }

        if($user->getEnabled() || password_verify($password, $user->getPassword())) {
            $this->registerLoginSession($user);
            return TRUE;
        }
        return FALSE;
    }

    public function sessionLogin() {
        if(session_status() == PHP_SESSION_ACTIVE) {
            $session = Session::getValidById(session_id());
            $user = User::getById($session->getUserId());
            if(!$user->getEnabled() || is_null($user)) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function logout() {
        if(session_status() == PHP_SESSION_ACTIVE)
        {
            Session::deleteById(session_id());
        }
    }

    public function registerLoginSession($user) {
        if(session_status() == PHP_SESSION_ACTIVE) {
            Session::replace(session_id(), $user->getId());
        }
    }

}