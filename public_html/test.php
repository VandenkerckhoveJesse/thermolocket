<?php
include_once "../resources/config.php";
include_once "../resources/src/Database.php";
include_once "../resources/src/Models/User.php";
include_once "../resources/src/Models/Session.php";
include_once "../resources/src/Controllers/UserController.php";
include_once "../resources/src/Helper.php";
echo "welcome";
echo " test";

$controller = new UserController();
try{
    $user = $controller->sessionLogin();
    echo $user->getName();
} catch(Exception $e) {
    echo $e->getMessage();
}
