<?php
include_once("../resources/config.php");
include_once("../resources/autoloader.php");
include_once("pdfconverter/createPDF.php");
$id = $_GET['id'];
if(isset($id)) {
    $dossier = Dossier::getById(intval($id));
    createPDF($dossier);
}