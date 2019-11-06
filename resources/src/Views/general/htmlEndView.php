<?php
if(isset($jsFiles)){

    

      
    $jsLink=constant(MODE."_ASSETS_PATH")."js/";

    foreach($jsFiles as $jsFile) { ?>
      <script src="<?php echo $jsLink.$jsFile?>"/></script>
      <?php }
}
?>

</body>
</html>
