<?php
include_once ("../resources/config.php");
include_once ("../resources/autoloader.php");
$adres = Adres::getById(5);
$adres->setNummer(85);
$adres->delete();
var_dump(Adres::getAll());
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

