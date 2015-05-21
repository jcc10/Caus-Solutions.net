<?php

namespace Caus\Head;

// The header function, sends the stylesheet and the page title.
function header($PageTitle) {
	global $settings, $tabs;
	echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">$tabs[0]<html xmlns=\"http://www.w3.org/1999/xhtml\">$tabs[1]<head>$tabs[2]<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />$tabs[2]<title>" . $settings["PageTitle"] . ": " . $PageTitle . "</title>$tabs[2]<link href='./CSS/physical.css' rel=\"stylesheet\" type=\"text/css\" />$tabs[2]<link href='./CSS/NewFeatures.css' rel=\"stylesheet\" type=\"text/css\" />$tabs[2]<link href='./CSS/" . \Caus\Theme\Themes() . ".css' rel=\"stylesheet\" type=\"text/css\" />$tabs[1]</head>";
}

function Banner() {
	global $settings, $tabs, $PageData;
	echo "$tabs[3]<div id='banner'>$tabs[4]<h1>" . $settings["Title"] . "</h1>$tabs[4]<h2>" . $settings["Subtitle"] . "</h2><!--$tabs[4]<br />-->$tabs[4]$tabs[4]";
	\Caus\Menus\TopMenu($PageData["MainMenu"], $PageData["PageName"]);
	echo "$tabs[3]</div> <!-- end banner -->";
	// This is where I will have to put in the main menu.
}

function main() {
	global $tabs, $PageData;
	//Print the header
	\Caus\Head\Header($PageData["Title"]);
	//Static HTML: Beginning of the page
	echo("$tabs[0]$tabs[1]<body>$tabs[2]<div id='container'>$tabs[0]");
	//Print the Banner text
	\Caus\Head\Banner();
	//Spacer
	echo("$tabs[3]<div class='spacer'></div>$tabs[0]");
}

?>