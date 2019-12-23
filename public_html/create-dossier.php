<?php
include_once ("../resources/config.php");
include_once ("../resources/autoloader.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php


/*if(!(isset($_POST['create_dossier']) && isPostValid())){
    exit();
}*/
$json = json_encode($_POST);
$result = json_decode($json);
//echo $json;
$controller = new WizardController();

$controller->createDossier($result);

function isPostValid() {
    return !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['status']);
}
?>
</body>
</html>

