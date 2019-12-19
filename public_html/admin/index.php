<?php
include_once("../../resources/config.php");
include_once ("../../resources/autoloader.php");
//Helper::authenticate("admin");


$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["userList.js"];

$users = User::getAll();

include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/usersView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");


?>
