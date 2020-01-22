<?php
include_once ("../resources/config.php");
include_once ("../resources/autoloader.php");
include_once("pdfconverter/createPDF.php");

$json = json_encode($_POST);
$result = json_decode($json);
printf($json);
$controller = new WizardController();
$dossier = $controller->createDossier($result);
//createPDF($dossier);

/*


function isPostValid() {
    return !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['status']);
}
?>
</body>
</html>*/

