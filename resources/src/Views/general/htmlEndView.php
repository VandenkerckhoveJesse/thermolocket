<script src="https://cdn.jsdelivr.net/npm/places.js@1.17.1"></script>
<?php
if(isset($jsFiles)){
    $jsLink=constant(MODE."_ASSETS_PATH")."js/";
    foreach($jsFiles as $jsFile) { ?>
      <script src="<?php echo $jsLink.$jsFile?>"></script>
      <?php }
}

?>

<script src="<?php echo $jsLink?>jquery-3.4.1.min.js"></script>
<script src="<?php echo $jsLink?>bootstrap.min.js"></script>
      

</body>
</html>
