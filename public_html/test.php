<?php
include_once ("../resources/config.php");
include_once ("../resources/autoloader.php");
$controller = new WizardController();

$gemeente = $controller->filterGemeenteByPostcode(Gemeente::getAll(), "8300");
var_dump($gemeente ? $gemeente : "test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
</body>
</html>

