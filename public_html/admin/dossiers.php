<?php
include_once("../../resources/config.php");
include_once ("../../resources/autoloader.php");
//Helper::authenticate("admin");


$pageTitle="Admin panel";
$cssFiles=["admin.css"];
$jsFiles=["userList.js"];
$dossiers = Dossier::getAll();

if(isset($_POST['search']) && isPostValid()){
    $dossiers = array_filter($dossiers, function ($dossier) {
        $name = $_POST["klantnaam"];
        $klant = $dossier->getKlant();
        return preg_match("/{$name}/i", $klant->getFullName());
    });
}

usort($dossiers, function($a, $b) {
    return  $b->getId() - $a->getId();
});



include_once("../../resources/src/Views/general/htmlStartView.php");
include_once("../../resources/src/Views/admin/dossiersView.php");
include_once("../../resources/src/Views/general/htmlEndView.php");

function isPostValid() {
    return !empty($_POST['klantnaam']);
}
?>
