<?php
include_once("../../resources/config.php");
include_once("../../resources/src/Controllers/UserController.class.php");
include_once("../../resources/src/Models/User.class.php");
include_once("../../resources/src/Models/Session.class.php");
include_once("../../resources/src/Database.class.php");
include_once("../../resources/src/Helper.class.php");

$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["userList.js"];

$users = User::getAll();

include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/usersView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");


?>
