<?php
	
	$defaultCSS = "CoolIce";
	
	require "./CSS-GEN-CODE.php";
	
	heads();

echo "/* Style/Theme: " . $style . "*/\n";
echo "/* Date Generated: " . date('Y-m-d H:i:s') . "*/\n";
// Go into other files edit the main CSS, split for less scrolling.
require_once "./CSS_Colour_Test/background.php";
require_once "./CSS_Colour_Test/banner.php";
require_once "./CSS_Colour_Test/tabMenu.php";
require_once "./CSS_Colour_Test/leftNcontent.php";
require_once "./CSS_Colour_Test/mainNcontent.php";
require_once "./CSS_Colour_Test/footerLnR.php";

?>