<?php
//Used to echo static HTML
function StatHTM($HTML) {
	echo $HTML;
}

//Headder. Grabs variables from dynamic.php.
function Static_header($PageTitle) {
	global $settings;
	echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n\t<head>\n\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />\n\t\t<title>" . $settings["PageTitle"] . ": " . $PageTitle . "</title>\n\t\t<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />\n\t\t</head>";
}

//Banner. Grabs variables from dynamic.php.
function Static_banner() {
	global $settings;
	$tab = "\t\t\t";
	echo "$tab<div id='banner'>$tab\t<h1>" . $settings["Title"] . "</h1>\n$tab\t<h2>" . $settings["Subtitle"] . "</h2>\n$tab\t<br />\n$tab\t<hr />\n$tab</div> <!-- end banner -->";
}

function Static_sidemenu($Sidebar, $SourcePageName) {
	$tab = "\t\t\t\t\t\t";
	echo "\t\t\t\t\t<ul>\n";
	echo "$tab<li>Navigation</li>\n";
	foreach ($Sidebar as $ID => $Item) {
		Static_sidemenu_item($Item, $SourcePageName);
	}
	echo "\t\t\t\t\t</ul>\n";
}

// Sidebar item format. Called by StaticDynamic sidebar function.
function Static_sidemenu_item($Item, $SourcePageName) {
	$tab = "\t\t\t\t\t\t";
	if ($Item["PageName"] == $SourcePageName) {
		echo "$tab<li><b>" . $Item["Text"] . "</b></li>\n";
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