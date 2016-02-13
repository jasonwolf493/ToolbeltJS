<html>
	<head>
		<title>testing</title>
		<?php include 'includes/php/footer.php'?>
		<?php include 'includes/php/nav.php'?>
		<?php include 'includes/php/contact.php'?>
		<?php include 'includes/php/headerimg.php'?>
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

		
		<?php nav("2");?>
		

		<?php  headerImg("..\includes/images/headerImg2.jpg")?>
		<div id="container" style="width:70%; margin:auto;">
		

		
		<!--
		
		<h3>Contact us Testing</h3>
		<php
		function contactForm(){

			
			
			if(isset($_POST['submit'])){
				//echo("hello ");
				$error = false;
				//CHECK FIRST NAME
				if($error == false){
					if(isset($_POST['firstname']) && $_POST['firstname'] != ""){
						//What to do if fname isset
						$firstname = $_POST['firstname'];
						echo("First Name: $firstname ");
					}else{$error = true; echo("Please enter your first name.");}
				}
				
				if($error == false){
					if(isset($_POST['lastname']) && $_POST['lastname'] != ""){
						//What to do if fname isset
						$lastname = $_POST['lastname'];
						echo("Last Name: $lastname");
					}else{$error = true; echo("Please enter your last name.");}
				}
				
				if($error == false){
					if(isset($_POST['phonenumber']) && $_POST['phonenumber'] != ""){
						//What to do if fname isset
						$phonenumber = $_POST['phonenumber'];
						echo("Phone Number: $phonenumber");
					}else{$error = true; echo("Please enter your phone number.");}
				}
				
				if($error == false){
					if(isset($_POST['email']) && $_POST['email'] != ""){
						//What to do if fname isset
						$email = $_POST['email'];
						echo("Email: $email");
					}else{$error = true; echo("Please enter your email.");}
				}
			}
		}
		contactForm();
		?>
		
		
		
		<form method="post">
			<input type="text" placeholder="First Name" name="firstname" required><br><br>
			<input type="text" placeholder="Last Name" name="lastname" required><br><br>
			<input type="text" placeholder="Phone Number" name="phonenumber" required><br><br>
			<input type="email" placeholder="Email" name="email" required><br><br>
			<input type="submit" name="submit" value="submit"><br><br>
		</form>
		-->
		<?php requestForm();?>
		
		
		

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