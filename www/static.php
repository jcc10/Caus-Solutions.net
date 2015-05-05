<?php
//Banner. Grabs variables from dynamic.php.
function Static_banner() {
	global $settings;
	$tab = "\t\t\t\t";
	echo "$tab<h1>" . $settings["Title"] . "</h1>\n$tab<h2>" . $settings["Subtitle"] . "</h2>\n$tab<br />\n$tab<hr />";
}

// Sidebar item format. Called by StaticDynamic sidebar function.
function Static_sidebar_item($Item, $SourcePageName) {
	$tab = "\t\t\t\t\t\t";
	if ($Item["PageName"] == $SourcePageName) {
		echo "$tab<li><a href=\"#header\">" . $Item["Text"] . "</a></li>\n";
	} else{
		echo "$tab<li><a href=\"" . $Item["Link"] . "\">" . $Item["Text"] . "</a></li>\n";
	}
}

// Footer.
function Static_Footer() {
	global $settings;
	// Left
	$tab = "\t\t\t\t";
	echo "<p class=\"left\">\n";
		echo "$tab\t | <a href=\"http://jigsaw.w3.org/css-validator/\"><img src=\"" . $settings["static"] . "vcss-blue.gif\" alt=\"CSS Level 3\" title=\"CSS Level 3\"></img></a> | \n$tab\t\t<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"" . $settings["static"] . "valid-xhtml11-blue.png\" alt=\"XHTML 1.1\" title=\"XHTML 1.1\"></img></a>";
	// Right
	echo "$tab<p class=\"right\">\n";
	echo "$tab\t<a href=\"" . $settings["Root"] . "credits.php\">Website Design Credits</a><br />\n";
	echo "$tab\tContent &copy;2015 " . $settings["CO-Name"] . "<br />&nbsp;\n";
	echo "$tab</p>\n";
}


?>