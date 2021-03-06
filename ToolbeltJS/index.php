<html>
<head>
  <title>Home Page | Testing Site</title>
  <?php include 'includes/php/footer.php' ?>
  <?php include 'includes/php/logoheader.php' ?>
  <?php include 'includes/php/nav.php' ?>
  <?php include 'includes/php/contact.php' ?>
  <?php include 'includes/php/headerimg.php' ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="jquery.transit.min.js"></script>
  <script src="includes/js/toolbelt.js" type="text/javascript"></script>
  <script src="includes/plugins/jquery-visible-master/jquery.visible.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="UTF-8">
  <meta name="description" content="Testing a modal">
  <meta name="keywords" content="Modal">
  <meta name="author" content="Jason">
</head>
<body>
  <!-- 1900x325 recc -->
  <?php headerImg("includes/images/headerImg.jpg") ?>
  <div id="container">
    <div class="sideBox viewportAnimate" style="opacity:0;"><h2>Side Box</h2><br /><p>Here you can add side content, this content will fill the page more and can drive users to other important pages of the site. However the Side Box should not show on devices with limited horizontal space like mobile devices. Learn more about <a href="packages.php"><strong>our packages</strong></a> here.</p></div>
    <div class="hasSideBox">
      <h1>Home Page</h1>
      <a class="toggleButton"><strong>Click To Open Modal</strong></a>
      <br><br>
      <img class="fancyIMG" width="562px" height="280px" src="includes/images/img1.jpg"></img>
      <br><br>

    </div>

    <div class="hasSideBox">
      <div class="sliderButton">Additional Information<p class="showMore">Show more</p>
        <div class="slider" style="overflow: hidden">Slider ffdafdafdsafdafdf<br> fdafdsaf<br>fdsfdsfsdfsd</div>
      </div>

      <div class="sliderButton">Additional Information<p class="showMore">Show more</p>
        <div class="slider" style="overflow: hidden">Slider ffdafdafdsafdafdf<br> fdafdsaf<br>fdsfdsfsdfsd<br>fdsafdaffdsfdsfad<br>dsafdsf
        </div>
      </div>

      <p id="text">Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec
        sollicitudin molestie m porta.</p>
      </div>
      <div  class="viewportAnimate" style="opacity:0; margin-left:100px; height:25px; width:100px; background-color:blue;">
        &nbsp;
      </div>
    </div>
    <br><br><br>
    <div id="roadBlockBox">
      <img class="roadBlockinnerToggleButton" src="includes/images/modalButton.png"></img>
      <p> ROADBLOCK sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed magna
        dictum porta. Sed porttitor lectus some text nibh. Proin eget tortor risus. Donec solli</p>
    </div>

      <div id="modalBox">
        <img class="innerToggleButton" src="includes/images/modalButton.png"></img>
        <p> MODAL sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed magna
          dictum porta. Sed porttitor lectus some text nibh. Proin eget tortor risus. Donec solli</p>
      </div>
        <div id="bgDiv"></div>
        <?php footer(); ?>
      </body>
      <script src="/includes/js/index.js"></script>
      <script>
      //WAIT UNTIL THE DOCUMENT IS READY TO START ANY JS OR JQ
      $(document).ready(function () {
        mobileNav();
        sliderOpen = false;
        bodyHeight = $("body").css("height");
        $("#bgDiv").css("height", bodyHeight);
        //modules
        fancyIMG();
        slider();
        modal();
        roadBlock(2500);
        viewportAnimation(".viewportAnimate");
      });
      </script>
      <?php nav("1");?>
      <?php logoheader("1"); ?>
      </html>
