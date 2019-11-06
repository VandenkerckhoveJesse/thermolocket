<?php
include_once "./config.php";
include_once "./src/Database.php";
include_once "./src/Models/User.php";

echo "welcome";

echo " test";
echo trim(" fred de bevret ");
$db = Database::getInstance();
$user = $db->addUser("vincent7", "jesse", "jesse.jesse.vdk@gmail.com", true );
echo $user->getName();
