<?php
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

    public function createUser($name, $password, $repeat_password, $email, $enabled) {
        $enabled = $enabled === 'true' ? true : false;
        //todo check if repeat is same as password
        User::add($name, $password, $email, $enabled);
    }

    public function editUser($id, $name, $password,$repeat_password, $email, $enabled) {
        $enabled = $enabled === 'true' ? true : false;
        if($password !== '') {
            User::edit($id, $name, $password, $email, $enabled);
        } else {
            User::editWithoutPassword($id, $name, $email, $enabled);
        }

    }

}