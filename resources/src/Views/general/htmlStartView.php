<?php
$cssLink=constant(MODE."_ASSETS_PATH")."css/";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $pageTitle ?></title>
    <meta name="author" content="Vincent Elias" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/public_html/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/public_html/assets/css/screen.css" />
    <link
      rel="stylesheet"
      href="<?php echo $cssLink?>bootstrap.min.css"
    />

    <?php 
   

    if(isset($cssFiles)){
      

    foreach($cssFiles as $cssFile) { ?>
      <link rel="stylesheet" type="text/css" href="<?php echo $cssLink.$cssFile?>" />
      <?php }
}

    ?>
  </head>
  <body>
