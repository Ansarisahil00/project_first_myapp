<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($title)) {
            echo $title;
        } else {
            echo "Testing";
        } ?>
    </title>
    <?php echo $common_css ?>
    <?php echo $style ?>
</head>

<body>
    <!-- <div class="header">
        <?php //echo $header_main ?>
    </div> -->
    
  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

    <div class="container-fluid mb-5">
    <?php echo $header_menu ?>
    </div>

    <div class="container">
        <?php echo $content ?>
    </div>


    <?php echo $footer ?>
    <?php echo $common_js ?>
    <?php echo $script ?>
</body>

</html>