<?php

namespace Caus\Body;

function Sidebar($SidebarNote) {
	global $tabs, $PageData;
	//Left side and LeftSide Content
	echo "$tabs[3]<div id='left'>$tabs[4]<div id='leftcontent'>$tabs[0]";
	//Sidebar Menu!
	\Caus\Menus\SideMenu($PageData["Sidebar"], $PageData["PageName"]);
	//Sidebar Note will go here
	//TODO: Sidebar Note
	//End of left Content!
	echo "$tabs[4]</div> <!-- end left content -->$tabs[3]</div> <!-- end left division -->$tabs[0]";
}


function CoreContent() {
	global $tabs, $PageData;
	//Start of main content
	echo("$tabs[3]<div id='main'>$tabs[4]<div id='maincontent'>$tabs[0]$tabs[0]$tabs[0]");
	
	// Loads the content form a PHP file... I should check if it can do a HTML file...
	include "./content/" . $PageData["File"];
	
	//End of main content!
	echo("$tabs[0]$tabs[0]$tabs[0]$tabs[4]</div> <!-- end main content section -->$tabs[3]</div> ");
}

//The main content area where we work.

function main() {
	
	//The sidebar function
	//(Null is for the sidebar content, place-holder until details are hammered down)
	\Caus\Body\Sidebar(Null);
	
	//The main content area.
	\Caus\Body\CoreContent();
}

?>