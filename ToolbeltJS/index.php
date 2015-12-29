<html>
	<head>
		<title>testing</title>
		<?php include '/includes/php/footer.php'?>
		<?php include '/includes/php/nav.php'?>
		<?php include '/includes/php/contact.php'?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic' rel='stylesheet' type='text/css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="jquery.transit.min.js"></script>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<meta charset="UTF-8">
		<meta name="description" content="Testing a modal">
		<meta name="keywords" content="Modal">
		<meta name="author" content="Jason">

		
	</head>
	<body>
		<?php nav("1");?>

		
		

		<div id="container" style="width:70%; margin:auto;">
		

		
		
		

		<?php contactForm();?>
		
		
		
		
	



			<div>
				<h1></h1>
				<a class="toggleButton"><strong>Click To Open Modal</strong></a>
				<br><br>			
				<img class="fancyIMG" width="562px" height="280px" src="includes/images/img1.jpg"></img>
				<br><br>
			
			</div>
			<div class="sliderButton">Additional Information<p class="showMore">Show more</p><div class="slider">Slider</div></div>
			
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
		$(document).ready(function(){

					

			
			
			
			function mobileNav(){
				mobileNavOpen = false;
				
				
				
				
			//GESTURE WORK
			//if its mobile size
				if(window.innerWidth <= 750){
					
					$(document).on("swiperight",function(){
						console.log("swipedright");
						if(mobileNavOpen == false){
							
							$("div.mobileNav").css("display", "block");
							$("div.mobileNav").transition({x: +100}, "slow", function(){mobileNavOpen = true;})
							
						}else{}
					});
						$(document).on("swipeleft",function(){
							console.log("swipedleft");
							if(mobileNavOpen == false){
							}else{
								$("div.mobileNav").transition({x: -100}, "slow", function(){$("div.mobileNav").css("display", "none");mobileNavOpen = false;})
								
							}
						});


				}
				$("img.mobileNav").click(function(){
					if(mobileNavOpen == false){
						$("div.mobileNav").css("display", "block");
						$("div.mobileNav").transition({x: +100}, "slow", function(){mobileNavOpen = true;})
						
					}else{
						$("div.mobileNav").transition({x: -100}, "slow", function(){$("div.mobileNav").css("display", "none");mobileNavOpen = false;})
						
						
					}
					
				})
			}
			mobileNav();
			
			
			
			
		
			bodyHeight = $("body").css("height");
			$("#bgDiv").css("height", bodyHeight);
		
			//FANCY IMG
			function fancyIMG(){
				imgOpen = 0;
				$(".fancyIMG").click(function(){
					if(imgOpen == 0){
						//$("#fancyIMG").css("margin", "auto");
						windowWidth = $("#container").outerWidth();
						imgWidth = $(this).outerWidth();
						margin = (windowWidth - imgWidth) / 2;
						
						pos = $(this).position();
						console.log(pos.left);
						posLeft = pos.left + margin;
						
						console.log("imgw: "+imgWidth);
						console.log("ww: "+windowWidth);
						console.log("margin: "+margin);
						imgMargin = $(this).css("margin");
						//$("#fancyIMG").css("margin", "initial");
						console.log(imgMargin);
						
						
						$(this).css("display", "block");
						$(this).css("z-index", "65");
						//$(this).transition({ rotate: '45deg' });
						$(this).transition({x: +margin}, "slow", function(){$(this).transition({scale: '1.3'}, "slow", function(){});});
						
						$("#bgDiv").css("display", "block");
						imgOpen = 1;
					}else{
						$("#bgDiv").css("display", "none");
						$(this).css("z-index", "55");
						$(this).transition({scale: '1.0'}, "slow", function(){$(".fancyIMG").transition({x: 0}, "slow", function(){});});
						//$("#fancyIMG").transition({scale: '1.0'}, "slow", function(){});
						imgOpen = 0;
					}
				})
				
			}fancyIMG();
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
			$(".slider").transition({scale: 0.0 }, 'fast');
			sliderOpen = false;
			$(".sliderButton").click(function(){
				if(sliderOpen == false){
					$(this).find(".slider").css("display","block");
					$(this).find(".slider").transition({scale: 1.0 }, 'fast');
					sliderOpen = true;
				}else{
					$(".slider").transition({scale: 0.0 }, 'fast', function(){$(".slider").css("display","none");});
					$(this).find(".slider").transition({scale: 0.0 }, 'fast', function(){$(this).find(".slider").css("display","none");});
					sliderOpen = false;
				}		
			});
			
			
			
			
			//CREATE THE MODAL FUNCTION
			function modal(){
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