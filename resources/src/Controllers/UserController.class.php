<?php
class UserController
{

    public function login($name, $password) {
        $name = trim($name);
        $password = trim($password);
        try{
            $user = User::getByName($name);
        } catch (Exception $e) {
            throw new Exception("Database query error");
        }
        if(!$user) {
            throw new Exception("User does not exist");
        }
        if($user->authenticate($password)) {
            $this->registerLoginSession($user);
            return $user;
        } else {
            throw new Exception("Wrong password or user not enabled");
        }

    }

    public function sessionLogin() {
        if(session_status() == PHP_SESSION_ACTIVE) {
            try{
                $session = Session::getValidById(session_id());
                $user = User::getById($session->getUserId());
                if($user->getEnabled()) {
                    return $user;
                } else {
                    throw new Exception("User is disabled");
                }
            } catch (Error $e) {
                throw new Exception("User or session does not exist");
            }
        }
        throw new Exception("Session is not enabled");
    }

    private function getUserBySession($session_id) {
        $session = Session::getById($session_id);
        $user = User::getById($session->getUserId());
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