<?php
if(isset($jsFiles)){

     require("../resources/config.php");

      
    $jsLink=constant(MODE."_ASSETS_PATH")."js/";

    foreach($jsFiles as $jsFile) { ?>
      <script src="<?php echo $jsLink.$jsFile?>"/></script>
      <?php }
}
?>

</body>
</html>
