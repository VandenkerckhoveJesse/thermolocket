<?php
include_once '../Models/User.php';

class UserController
{

    public function login($name, $password) {
        $name = trim($name);
        $password = trim($password);
        $user = User::getByName($name);
        if($user->getEnabled() || password_verify($password, $user->getPassword())) {
            $this->registerLoginSession($user);
            return TRUE;
        }
        return FALSE;
    }

    public function registerLoginSession($user) {
        if(session_status() == PHP_SESSION_ACTIVE) {

        }
    }

}