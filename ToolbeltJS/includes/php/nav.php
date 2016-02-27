<?php

	function oldNav($active){
		echo '
		<div class="nav">
			<nav>
				<a href="index.php" '; if($active=="1"){echo'class="active"';};echo'>Home</a>
				<a href="packages.php" '; if($active=="2"){echo'class="active"';};echo'>Packages</a>
				<a href="gallery.php" '; if($active=="3"){echo'class="active"';};echo'>Gallery</a>
				<a href="contact-us.php" '; if($active=="4"){echo'class="active"';};echo'>Contact Us</a>
				<img class="mobileNav" src="includes/images/hamburger.png" height="100px" width="100px">
			</nav>
		</div>




		<div class="MobileNav">

				<a href="index.php" '; if($active=="1"){echo'class="active"';};echo'>Home</a>
				<a href="packages.php" '; if($active=="2"){echo'class="active"';};echo'>Packages</a>
				<a href="gallery.php" '; if($active=="3"){echo'class="active"';};echo'>Gallery</a>
				<a href="contact-us.php" '; if($active=="4"){echo'class="active"';};echo'>Contact Us</a>

		</div>
		';

	}




	function nav($active){
		echo"
<script type='text/javascript'>$('body').prepend('";
echo'<ul class="nav"><li><a href="index.php" '; if($active=="1"){echo'class="active"';}else{echo'class="navButton"';};echo'>Home</a><ul class="childContainer" ><li><a class="navChild" style="float: none;" href="#">Ratites</a></li><li><a class="navChild" style="float: none;" href="#">Fowl</a></li><li><a class="navChild" style="float: none;" href="#">Neoaves</a></li></ul></li><li><a href="packages.php" '; if($active=="2"){echo'class="active"';}else{echo'class="navButton"';};echo'>Packages</a><ul class="childContainer"><li><a class="navChild" href="#">Monotremes</a></li><li><a class="navChild" href="#">Marsupials</a></li><li><a class="navChild" href="#">Placentals</a></li></ul></li><li><a href="gallery.php" '; if($active=="3"){echo'class="active"';}else{echo'class="navButton"';};echo'>Gallery</a><ul class="childContainer" ><li><a class="navChild" href="#">Monotremes</a></li><li><a class="navChild" href="#">Marsupials</a></li><li><a class="navChild" href="#">Placentals</a></li></ul></li><li><a href="contact-us.php" ';if($active=="4"){echo'class="active"';}else{echo'class="navButton"';};echo'>Contact Us</a><ul class="childContainer" ><li><a class="navChild" href="#">Monotremes</a></li><li><a class="navChild" href="#">Marsupials</a></li><li><a class="navChild" href="#">Placentals</a></li></ul></li><!-- etc. --><img class="mobileNav" src="includes/images/hamburger.png" height="100px" width="100px"></ul><div class="mobileNav"><a href="index.php" ';if($active=="1"){echo'class="active"';};echo'>Home</a><a href="packages.php" ';if($active=="2"){echo'class="active"';};echo'>Packages</a><a href="gallery.php" ';if($active=="3"){echo'class="active"';};echo'>Gallery</a><a href="contact-us.php" ';if($active=="4"){echo'class="active"';};echo'>Contact Us</a></div>';
echo"');</script>";

echo '
<script>
    $(".childContainer").width($("body").width() *.25);
    $(".childContainer").css("left",-$("body").width() *.25);
</script>
		';
	}
?>
