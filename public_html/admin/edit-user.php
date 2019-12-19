<?php
include_once("../../resources/config.php");
include_once ("../../resources/autoloader.php");
//Helper::authenticate("admin");

$userController = new UserController();
$id = $_GET['id'];
if(isset($_POST['update']) && isPostValid()){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $enabled = $_POST['status'];
    $userController->editUser($id, $name, $password, $password, $email, $enabled);
}




$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["editUser.js"];

$user = User::getById($id);

function isPostValid() {
    return !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['status']);
}


include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/editUserView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");

?>