<html>
<head>
    <title>testing</title>
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
<?php nav("4"); ?>

<?php headerImg("..\includes/images/headerImg4.jpg") ?>
<div id="container" style="width:70%; margin:auto;">

    <?php requestForm(); ?>


    <!-- Core CSS file -->
    <link rel="stylesheet" href="/includes/plugins/photoswipe/dist/photoswipe.css">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="/includes/plugins/photoswipe/dist/default-skin/default-skin.css">

    <!-- Core JS file -->
    <script src="/includes/plugins/photoswipe/dist/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="/includes/plugins/photoswipe/dist/photoswipe-ui-default.min.js"></script>


    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>
    </div>

    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.5351585414523!2d-71.98330404905481!3d41.38418300405504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e60a5c8702e131%3A0xd9cdd5e437f8d6b4!2s67+Ann+Ave%2C+Mystic%2C+CT+06355!5e0!3m2!1sen!2sus!4v1455339755485" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



        <h1></h1>
        <a class="toggleButton"><strong>Open Modal</strong></a>


        <div class="sliderButton">Additional Information<p class="showMore">Show more</p>
            <div class="slider">Slider</div>
        </div>

        <p id="text">Cras ultricies ligula sed magna dictum porta. <?php phoneNumber(); ?> Sed porttitor lectus nibh. Proin
            eget tortor risus. Donec sollicitudin molestie m porta.</p>
    </div>


    <br><br><br>


    <div id="modalBox">
        <img class="innerToggleButton" src="includes/images/modalButton.png"></img>
        <p> ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed
            magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli</p>

    </div>
    <div id="bgDiv"></div>
    <?php footer(); ?>

</body>


<script src="/includes/js/index.js"></script>
<script>


    //WAIT UNTIL THE DOCUMENT IS READY TO START ANY JS OR JQ
    $(document).ready(function () {


        function mobileNav() {
            mobileNavOpen = false;


            //GESTURE WORK
            //if its mobile size
            if (window.innerWidth <= 750) {

                $(document).on("swiperight", function () {
                    console.log("swipedright");
                    if (mobileNavOpen == false) {

                        $("div.mobileNav").css("display", "block");
                        $("div.mobileNav").transition({x: +100}, "slow", function () {
                            mobileNavOpen = true;
                        })

                    } else {
                    }
                });
                $(document).on("swipeleft", function () {
                    console.log("swipedleft");
                    if (mobileNavOpen == false) {
                    } else {
                        $("div.mobileNav").transition({x: -100}, "slow", function () {
                            $("div.mobileNav").css("display", "none");
                            mobileNavOpen = false;
                        })

                    }
                });


            }
            $("img.mobileNav").click(function () {
                if (mobileNavOpen == false) {
                    $("div.mobileNav").css("display", "block");
                    $("div.mobileNav").transition({x: +100}, "slow", function () {
                        mobileNavOpen = true;
                    })

                } else {
                    $("div.mobileNav").transition({x: -100}, "slow", function () {
                        $("div.mobileNav").css("display", "none");
                        mobileNavOpen = false;
                    })


                }

            })
        }

        mobileNav();


        bodyHeight = $("body").css("height");
        $("#bgDiv").css("height", bodyHeight);

        //FANCY IMG
        function fancyIMG() {
            imgOpen = 0;
            $(".fancyIMG").click(function () {
                if (imgOpen == 0) {
                    //$("#fancyIMG").css("margin", "auto");
                    windowWidth = $("#container").outerWidth();
                    imgWidth = $(this).outerWidth();
                    margin = (windowWidth - imgWidth) / 2;

                    pos = $(this).position();
                    console.log(pos.left);
                    posLeft = pos.left + margin;

                    console.log("imgw: " + imgWidth);
                    console.log("ww: " + windowWidth);
                    console.log("margin: " + margin);
                    imgMargin = $(this).css("margin");
                    //$("#fancyIMG").css("margin", "initial");
                    console.log(imgMargin);


                    $(this).css("display", "block");
                    $(this).css("z-index", "65");
                    //$(this).transition({ rotate: '45deg' });
                    $(this).transition({x: +margin}, "slow", function () {
                        $(this).transition({scale: '1.3'}, "slow", function () {
                        });
                    });

                    $("#bgDiv").css("display", "block");
                    imgOpen = 1;
                } else {
                    $("#bgDiv").css("display", "none");
                    $(this).css("z-index", "55");
                    $(this).transition({scale: '1.0'}, "slow", function () {
                        $(".fancyIMG").transition({x: 0}, "slow", function () {
                        });
                    });
                    //$("#fancyIMG").transition({scale: '1.0'}, "slow", function(){});
                    imgOpen = 0;
                }
            })

        }

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


        //SLIDER
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
        function modal() {
            // THE VARIABLE TO CHECK IF THE MODAL IS OPEN
            var modalOpen = 0;

            //HIDES THE MODALBOX WHEN THE FUNCTION IS RAN
            $("#modalBox").hide();
            <!-------------------------------------------------- THE CLOSE BUTTON INSIDE THE MODAL --------------------------------------------------------!>
        $(".innerToggleButton").click(function(){
				if(modalOpen == 0){
					
					$("#modalBox").transition({marginTop: '50px', opacity: 1}, "slow", function(){$("#modalBox").css("display", "block");});
					$("#bgDiv").css("display", "block");
					modalOpen = 1;
				}else{
					$("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function(){$("#modalBox").css("display", "none");});
					$("#bgDiv").css("display", "none");
					modalOpen = 0;
				}
			});
			
			
			
			
			<!-------------------------------------------------- ESCAPE BUTTON --------------------------------------------------------!>
			$(document.body).keydown(function(event){ 
				if(modalOpen == 1){
					if(event.which == 27){
						$("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function(){$("#modalBox").css("display", "none");});
						$("#bgDiv").css("display", "none");
						modalOpen = 0;
					}
				
				
				}

			});
			
			
			<!-------------------------------------------------- THE BUTTON TO TOGGLE THE MODAL --------------------------------------------------------!>	
			$(".toggleButton").click(function(){
				if(modalOpen == 0){
					$("#modalBox").css("display", "block");
					$("#modalBox").transition({marginTop: '100px', opacity: 1}, "slow", function(){});
					$("#bgDiv").css("display", "block");
					modalOpen = 1;
				}else{
					$("#bgDiv").css("display", "none");
					$("#modalBox").transition({marginTop: '-50px', opacity: 0}, "slow", function(){$("#modalBox").css("display", "none");});
					modalOpen = 0;
				}
			});
			}
			<!-------------------------------------------------- CALL THE MODAL FUNCTION HERE --------------------------------------------------------!>
			modal();



		});
</script>


</html>