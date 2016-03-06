<?php
function headerImg($link){
	echo"
	<script type='text/javascript'>if($(window).width() > 750){"; echo "$('body').append('<div style=";echo '"width:100%; height:470px; background-image: url(';echo"$link"; echo'); background-repeat:no-repeat; background-attachment:fixed; background-position:center center; background-size:cover;"></div>';echo"')";echo '}else{$(';echo"'body').append('<div style=";echo '"width:100%; height:300px; background-image: url(';echo"$link"; echo'); background-repeat:no-repeat; background-size: cover;"></div>';echo"')";echo";}</script>";
}
?>
