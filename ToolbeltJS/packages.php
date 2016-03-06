<html>
	<head>
		<title>testing</title>
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
		<script src="includes/js/toolbelt.js" type="text/javascript"></script>
		<script src="jquery.transit.min.js"></script>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<meta charset="UTF-8">
		<meta name="description" content="Testing a modal">
		<meta name="keywords" content="Modal">
		<meta name="author" content="Jason">


	</head>
	<body>
		<?php headerImg("includes/images/headerImg2.jpg")?>
		<div id="container" style="width:70%; margin:auto;">
		<?php requestForm();?>
			<div class="sliderButton">Additional Information<p class="showMore">Show more</p>
				<div class="slider" style="overflow: hidden">This is a test slider you can use it to show additional info about something<br> fdafdsaf<br>fdsfdsfsdfsd</div>
			</div>
			<div>
				<h1></h1>
				<a class="toggleButton"><strong>Open Modal</strong></a>
				<br><br>
				<a class="toggleButton"><strong>Open Modal</strong></a>
				<br>
				<img class="fancyIMG" width="562px" height="280px" src="includes/images/img1.jpg"></img>
				<br><br>
				<img class="fancyIMG" width="562px" height="280px" src="includes/images/img1.jpg"></img>
			</div>
			<p id="text">Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec sollicitudin molestie m porta.</p>
		</div>




		<br><br><br>


			<div id="modalBox">
				<img class="innerToggleButton" src="includes/images/modalButton.png"></img>
				<p> ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli</p>

			</div>
		<div id="bgDiv"></div>
		<?php footer();?>
	</body>




<script src="/includes/js/index.js"></script>
<script>


    //WAIT UNTIL THE DOCUMENT IS READY TO START ANY JS OR JQ
    $(document).ready(function () {



        mobileNav();
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
                $(".slider").transition({height: 0.0}, 'slow', function () {
                    $(".slider").css("display", "none");
                });
                $(this).find(".slider").transition({height: 0.0}, 'slow', function () {
                    $(this).find(".slider").css("display", "none");
                });
                sliderOpen = false;
            }
        });

        bodyHeight = $("body").css("height");
        $("#bgDiv").css("height", bodyHeight);

        //modules
        fancyIMG();
        slider();
        modal();

    });
</script>
<?php nav("2");?>
<?php logoheader("2"); ?>
</html>
