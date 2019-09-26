<?php
include "../php/config.php";

//-- Init
$strCity = $_GET["city"];
$strSubCity = $_GET["subcity"];
$strSide = $_GET["side"];
$strId = $_GET["id"];

//-- Set image name
$strImage = $strCity . "/" . $strSubCity . "/" . $strSide . "/" . $strId . ".jpg";

if(file_exists($strImagePath . $strImage)) {
	//-- Get the image contents
	$strImage = $strImagePath . $strImage;
}
else {
	//-- Image not found, get placeholder contents
	$strImage = $strImagePlaceholder;
}

//-- Output the image
$strType = 'image/jpeg';
header('Content-Type:'. $strType);
header('Content-Length: ' . filesize($strImage));
readfile($strImage);