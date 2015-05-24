<?php
header("Content-type: text/css; charset: UTF-8");


echo "/* Physical Locations of items and other stuff that does not change between themes */\n";
echo "/* Date Generated: " . date('Y-m-d H:i:s') . "*/\n";


// Go into other files edit the main CSS, split for less scrolling.
require_once "./CSS_Physical_Genarator/background.css";
require_once "./CSS_Physical_Genarator/banner.css";
require_once "./CSS_Physical_Genarator/tabMenu.css";
require_once "./CSS_Physical_Genarator/leftNcontent.css";
require_once "./CSS_Physical_Genarator/mainNcontent.css";
require_once "./CSS_Physical_Genarator/footerLnR.css";
?>