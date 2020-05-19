<?php


class Helper
{
    public static function isPasswordValid($password) {
        //todo password validation here
        return true;
    }

    public static function isUserNameValid($username) {
        //todo username validation here
        return true;
    }

    public static function authenticate($clearance) {
        if($clearance === "user"){
            self::authenticateUser();
            return true;
        }
        if($clearance === "admin"){
            self::authenticateAdmin();
            return true;
        }
        echo "Clearance level does not exist";
        die();
    }

    public static function authenticateUser() {
        $userController = new UserController();
        try {
            $user = $userController->sessionLogin();
        } catch( Exception $e) {
            self::redirectToIndex();
        }

    }

    public static function authenticateAdmin() {
        $userController = new UserController();
        try {
            $user = $userController->sessionLogin();
            if($user->getName() !== "admin") self::redirectToIndex();
        } catch( Exception $e) {
            self::redirectToIndex();
        }

    }

    public static function redirectToIndex() {
        $url = "/public_html/index.php";
        self::redirect($url);
    }

    public static function redirect($url) {
        header('Location: '.$url);
        exit();
    }
}