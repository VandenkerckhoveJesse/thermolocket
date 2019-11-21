<?php
include_once "../resources/config.php";
include_once "../resources/autoloader.php";
Helper::authenticate("admin");
$uc = new UserController();
$user = $uc->sessionLogin();
echo $user->getName();
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

