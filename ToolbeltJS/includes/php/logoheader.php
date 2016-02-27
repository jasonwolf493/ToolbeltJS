<?php
	function logoHeader($active){
		echo"<script type='text/javascript'>$('body').prepend('";
		echo '<div class="logo"><div><a '; if($active!='1'){echo'href="index.php"';}else{}; echo' ><img src="includes/images/logo.png" style="max-height: 75px;"></img></a><ul style="float:right; vertical-align: middle; padding-top: 30;"><li style="float:right; padding-left: 10px;padding-right: 10px;"><a href="#">About Us</a></li><li style="float:right; padding-left: 10px;padding-right: 10px;"><a href="#">Follow Us</a></li></ul></div></div>';
		echo"');</script>";
	}
?>
