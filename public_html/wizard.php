<?php
include_once("../resources/config.php");

$pageTitle="Thermoloket";
$cssFiles=["wizard.css"];
$cssFiles=["bootstrap.min.css"];


include_once("../resources/src/Views/general/htmlStartView.php");
include_once("../resources/src/Views/wizardView.php");
include_once("../resources/src/Views/general/htmlEndView.php");

$jsFiles=["wizard.js"];
$jsFiles=["jquery-3.4.1.min.js"];
$jsFiles=["bootstrap.min.js"];
?>