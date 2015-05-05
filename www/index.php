<?php
	// Set local variables based off of GET requests...
	if (empty($_GET["page"]) != True){
		$page = $_GET["page"];
	} else {
		$page = "Home";
	}
	//Load the DB's Contents
	include "./DB_Loader.php";
	//Load the HTML Format stuffz
	include "./static_dynamic.php";
	//Select the page's data from all pages array and set the subtitle if the local subtitle is not "None"
	$PageData = $PageDB[$page];
	if ($PageData["Subtitle"] != "None") {
		$settings["Subtitle"] = $PageData["Subtitle"];
	}
	//Print the header
	Static_header($PageData["Title"]);
	//Static HTML: Beginning of the page
	StatHTM("\n\n\t<body>\n\t\t<div id='container'>\n");
	//Print the Banner text
	Static_banner();
	//Spacer
	StatHTM("\n\t\t\t<div class='spacer'></div>\n");
	//load which sidebar menu we want.
	$SidebarMenu = $SidebarDB[$PageData["Sidebar"]];
	StaticDynamic_side($SidebarMenu, $page, Null);
	//Start of main content
	StatHTM("\t\t\t<div id='main'>\n\t\t\t\t<div id='maincontent'>\n");
	
	
	

?>