<?php
include_once("../../resources/config.php");

$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["userList.js"];


include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/usersView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");


?>