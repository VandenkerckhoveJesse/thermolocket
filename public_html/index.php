<?php
include_once("../resources/config.php");
include_once("../resources/autoloader.php");
$userController = new UserController();
try {
    $user = $userController->sessionLogin();
    if($user->getName() === "admin") {
        Helper::redirect('admin');
    }
    Helper::redirect("wizard.php");
} catch( Exception $e) {
    Helper::redirect('login.php');
}


?>