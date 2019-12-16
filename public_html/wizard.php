<?php
include_once("../resources/config.php");
include_once("../resources/autoloader.php");
//Helper::authenticate("user");

$pageTitle="Thermoloket";
$cssFiles=["wizard.css"];
$jsFiles=["wizard.js","algolia-autocomplete.js"];

if (isset($_POST["gegevens"]["voornaam"])){
    print_r($_POST);
}



include_once("../resources/src/Views/general/htmlStartView.php");
include_once("../resources/src/Views/wizardView.php");
include_once("../resources/src/Views/general/htmlEndView.php");


?>