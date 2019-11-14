<?php
include_once("../../resources/config.php");
include_once("../../resources/src/Controllers/UserController.class.php");
include_once("../../resources/src/Models/User.class.php");
include_once("../../resources/src/Models/Session.class.php");
include_once("../../resources/src/Database.class.php");
include_once("../../resources/src/Helper.class.php");

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