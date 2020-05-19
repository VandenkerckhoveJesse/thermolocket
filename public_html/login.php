<?php
include_once("../resources/config.php");
include_once ("../resources/autoloader.php");
$pageTitle = "Login";
$cssFiles = ["login.css"];

$userController = new UserController();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];
    try{
        $userController->login($username, $password);
        Helper::redirect('index.php');
    } catch(Exception $e) {
        $error = $e->getMessage();
    }
}

include_once("../resources/src/Views/general/htmlStartView.php");
include_once("../resources/src/Views/loginView.php");
include_once("../resources/src/Views/general/htmlEndView.php");
