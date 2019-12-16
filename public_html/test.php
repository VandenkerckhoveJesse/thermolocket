<?php
include_once ("../resources/config.php");
include_once ("../resources/autoloader.php");
$model = ModelFactory::createWoning(3, 1);
$model->add();
var_dump(Afbeelding::getAll());
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

