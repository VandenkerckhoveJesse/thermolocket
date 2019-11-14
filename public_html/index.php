<?php
include_once("../resources/config.php");
echo session_id();
$pageTitle="Login";
$cssFiles=["login.css"];
echo


include_once("../resources/src/Views/general/htmlStartView.php");
include_once("../resources/src/Views/loginView.php");
include_once("../resources/src/Views/general/htmlEndView.php");


?>