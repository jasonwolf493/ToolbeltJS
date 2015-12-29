<?php 
	
	function nav($active){
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
?>