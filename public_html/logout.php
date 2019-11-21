<?php
include_once("../resources/config.php");
include_once ("../resources/autoloader.php");
$userController = new UserController();
try {
    $user = $userController->sessionLogin();
    $userController->logout();
    Helper::redirect('login.php');
} catch( Exception $e) {
    Helper::redirect('login.php');
}
