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
<?php headerImg("includes/images/headerImg3.jpg") ?>
<div id="container">
	<div class="sideBox viewportAnimate" style="opacity:0;"><h2>Side Box</h2><br /><p>Here you can add side content, this content will fill the page more and can drive users to other important pages of the site. However the Side Box should not show on devices with limited horizontal space like mobile devices. Learn more about <a href="packages.php"><strong>our packages</strong></a> here.</p></div>
    <div class="hasSideBox">
			<h1>Gallery</h1>
			<link rel="stylesheet" href="/includes/plugins/photoswipe/dist/photoswipe.css">
			<link rel="stylesheet" href="/includes/plugins/photoswipe/dist/default-skin/default-skin.css">
			<script src="/includes/plugins/photoswipe/dist/photoswipe.min.js"></script>
			<script src="/includes/plugins/photoswipe/dist/photoswipe-ui-default.min.js"></script>
			<!-- Edit the Below my-gallery to change the Gallery images-->
			<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="https://farm4.staticflickr.com/3894/15008518202_c265dfa55f_h.jpg" itemprop="contentUrl" data-size="2048x1365">
							<img src="https://farm4.staticflickr.com/3894/15008518202_b016d7d289_m.jpg" itemprop="thumbnail" alt="Image description"  class="small"/>
					</a>
																							<figcaption itemprop="caption description">Image caption  1</figcaption>

				</figure>

				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="https://farm6.staticflickr.com/5591/15008867125_b61960af01_h.jpg" itemprop="contentUrl" data-size="964x1024">
							<img src="https://farm6.staticflickr.com/5591/15008867125_68a8ed88cc_m.jpg" itemprop="thumbnail" alt="Image description" style=" float:left;" class="large"/>
					</a>
					<figcaption itemprop="caption description">Image caption 2</figcaption>
				</figure>


				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
							<img src="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_m.jpg" itemprop="thumbnail" alt="Image description" style=" float:left;" class="large"/>
					</a>
					<figcaption itemprop="caption description">Image caption 3</figcaption>
				</figure>

				<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
							<img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" class="small" style="" />
					</a>
					<figcaption itemprop="caption description">Image caption 4</figcaption>
				</figure>
			</div>

			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="pswp__bg"></div>
				<div class="pswp__scroll-wrap">
						<div class="pswp__container">
								<div class="pswp__item"></div>
								<div class="pswp__item"></div>
								<div class="pswp__item"></div>
						</div>
						<div class="pswp__ui pswp__ui--hidden">
								<div class="pswp__top-bar">
										<div class="pswp__counter"></div>
										<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
										<button class="pswp__button pswp__button--share" title="Share"></button>
										<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
										<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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
    </div>
</div>
<br><br><br>
<div id="modalBox">
    <img class="innerToggleButton" src="includes/images/modalButton.png"></img>
    <p> ligula sed magna dictum porta. Sed porttitor lectus nibh. Proin eget tortor risus. Donec solli ligula sed magna
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
        viewportAnimation(".viewportAnimate");
    });
</script>
<?php nav("3");?>
<?php logoheader("3"); ?>
</html>
