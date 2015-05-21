<?php

namespace Caus\Footer;

function FooterLeft() {
	global $tabs, $settings;
	// Left side of the footer
	echo "$tabs[4]<p class=\"left\">\n";
	
	
		echo "$tabs[5] | ";
		echo "<a href=\"http://jigsaw.w3.org/css-validator/\"><img src=\"" . $settings["static"] . "vcss-blue.gif\" alt=\"CSS Level 3\" title=\"CSS Level 3\"></img></a>";
		echo "$tabs[5] | ";
		echo "\t\t<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"" . $settings["static"] . "valid-xhtml11-blue.png\" alt=\"XHTML 1.1\" title=\"XHTML 1.1\"></img></a>";
		
		
		echo "$tabs[4]</p>$tabs[0]";
}

function FooterRight() {
	global $tabs, $settings;
	// Right side of the footer
	echo "$tabs[4]<p class=\"right\">";
	
	
	echo "$tabs[5]<a href=\"./index.php?page=Credits\">Website Design Credits</a><br />";
	echo "$tabs[5]Content &copy;2015 " . $settings["CO-Name"] . "<br />&nbsp;";
	
	
	echo "$tabs[4]</p>\n";
}

function main(){
	global $tabs, $settings;
	echo ("$tabs[3]<div id='footer'><div class='spacer'></div>");
	echo ("<hr />");
	
	\Caus\Footer\FooterLeft();
	\Caus\Footer\FooterRight();
	
	echo ("$tabs[3]</div> <!-- end footer -->$tabs[0]$tabs[2]</div> <!-- end container -->");
}

?>