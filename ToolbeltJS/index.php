<html>
<head>
    <title>Home Page | Testing Site</title>
    <?php include 'includes/php/footer.php' ?>
    <?php include 'includes/php/nav.php' ?>
    <?php include 'includes/php/contact.php' ?>
    <?php include 'includes/php/headerimg.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic' rel='stylesheet'
          type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="jquery.transit.min.js"></script>
    <script src="includes/js/toolbelt.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="description" content="Testing a modal">
    <meta name="keywords" content="Modal">
    <meta name="author" content="Jason">


</head>
<body>
<script type="text/javascript">test();</script>
<?php nav("1"); ?>


<!-- 1900x325 recc -->
<?php headerImg("..\includes/images/headerImg.jpg") ?>
<div id="container" style="width:70%; margin:auto;">


    <div>
        <h1></h1>
        <a class="toggleButton"><strong>Click To Open Modal</strong></a>
        <br><br>
        <img class="fancyIMG" width="562px" height="280px" src="includes/images/img1.jpg"></img>
        <br><br>

    </div>
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


<br><br><br>


<div id="modalBox">
    <img class="innerToggleButton" src="includes/images/modalButton.png"></img>
    <p> ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed magna
        dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli</p>

</div>
<div id="bgDiv"></div>
<?php footer(); ?>

</body>


<script src="/includes/js/index.js"></script>
<script>


    //WAIT UNTIL THE DOCUMENT IS READY TO START ANY JS OR JQ
    $(document).ready(function () {



        mobileNav();


        bodyHeight = $("body").css("height");
        $("#bgDiv").css("height", bodyHeight);

        //FANCY IMG


        fancyIMG();
        /*VERSION 1.0*/
        /*
         notSet = true;
         $("#fancyIMG").hover(function(){
         $(this).clearQueue();
         if(notSet == true){
         originalWidth = $(this).width();
         originalHeight = $(this).height();
         notSet = false;
         }

         var extraWidth = Math.round(originalWidth+originalWidth*0.25);
         var extraHeight = Math.round(originalHeight+originalHeight*0.25);
         console.log("Width: " + extraWidth);
         console.log("Height: " + extraHeight);
         $(this).transition({
         height: extraHeight,
         width: extraWidth}, "fast")
         },function(){
         console.log("Width: " + originalWidth);
         console.log("Height: " + originalHeight);
         $(this).transition({
         height: originalHeight,
         width: originalWidth}, "fast")
         });

         */


        $(".sliderButton").each(function () {

            $(this).find(".slider").data('height', $(this).height() - 26);
            console.log($(this).find(".slider").data('height'));
            $(this).find(".slider").css("display", "none");
        });
        //SLIDER
        //var height = $(".slider").height();
        //console.log(height);
        //$(".slider").transition({height: 0 }, 'fast');
        sliderOpen = false;
        //$(this).data('height', $(this).height());
        //$(".sliderButton").click(slider());
        $(".sliderButton").click(function () {
            if (sliderOpen == false) {
                $(this).find(".slider").css("display", "block");

                $(this).find(".slider").transition({height: $(this).find(".slider").data('height')}, 'slow');
                sliderOpen = true;
            } else {
                $(".slider").transition({height: 0.0}, 'fast', function () {
                    $(".slider").css("display", "none");
                });
                $(this).find(".slider").transition({height: 0.0}, 'fast', function () {
                    $(this).find(".slider").css("display", "none");
                });
                sliderOpen = false;
            }
        });


        //CREATE THE MODAL FUNCTION


        //-------------------------------------------------- CALL THE MODAL FUNCTION HERE --------------------------------------------------------
        modal();


    });
</script>


</html>