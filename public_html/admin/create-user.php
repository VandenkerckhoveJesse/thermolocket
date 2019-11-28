<?php
include_once("../../resources/config.php");
include_once ("../../resources/autoloader.php");

Helper::authenticate("admin");

$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["editUser.js"];

$userController = new UserController();

if(isset($_POST['create']) && isPostValid()){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $enabled = $_POST['status'];
    $userController->createUser($name, $password, $password, $email, $enabled);
}


function isPostValid() {
    return !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['status']);
}

include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/createUserView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");
