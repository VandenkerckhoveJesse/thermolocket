<?php
include_once("../../resources/config.php");
include_once("../../resources/src/Controllers/UserController.php");
include_once("../../resources/src/Models/User.php");
include_once("../../resources/src/Models/Session.php");
include_once("../../resources/src/Database.php");
include_once("../../resources/src/Helper.php");

$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["userList.js"];

$users = User::getAll();
var_dump($users);

include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/usersView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");


?>
