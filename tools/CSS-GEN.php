<?php
	
	$defaultCSS = "CoolIce";
	
	require "./CSS-GEN-CODE.php";
	
	heads();
?>
/* Style/Theme: <?php echo($style); ?> */
body {
	background: -moz-linear-gradient(<?php Color("BG Top"); ?> 0%, <?php Color("BG Bottom"); ?> 480px);
	background: -webkit-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: -o-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: -ms-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background-repeat: no-repeat;
	background-color: <?php Color("BG Main"); ?>;
}
#container {
	background: <?php Color("Container"); ?>;
	box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
	-moz-box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
	-webkit-box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
}

<?php

// Go into other files edit the main CSS, split for less scrolling.
require_once "./CSS/banner.php";
require_once "./CSS/leftNcontent.php";
require_once "./CSS/mainNcontent.php";
require_once "./CSS/footerLnR.php";

?>