<?php
include_once "../resources/config.php";
include_once "../resources/autoloader.php";
$uc = new UserController();

echo $uc->sessionLogin()->getName();
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

