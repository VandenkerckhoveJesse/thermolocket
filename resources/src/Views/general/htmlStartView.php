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
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <?php 
   

    if(isset($cssFiles)){
      
    $cssLink=constant(MODE."_ASSETS_PATH")."css/";


    foreach($cssFiles as $cssFile) { ?>
      <link rel="stylesheet" type="text/css" href="<?php echo $cssLink.$cssFile?>" />
      <?php }
}

    ?>
  </head>
  <body>
