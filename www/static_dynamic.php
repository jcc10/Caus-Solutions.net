<?php

$settings = array();
// include trailing sash here.
$settings["Location"] = "/WebFiles/caus-solutions.net/www/";

/* Static Dynamic Items (This is going into the DB along with the content of pages) */
function StaticDynamic_side($Sidebar, $origin, $SidebarNote) {
	global $settings;
	$tab = "\t\t\t";
	//Left side and LeftSide Content
	StatHTM("$tab<div id='left'>\n$tab\t<div id='leftcontent'>\n");
	//Sidebar Menu!
	Static_sidemenu($Sidebar, $origin);
	//Sidebar Note will go here
	//TODO: Sidebar Note
	//End of left Content!
	StatHTM("$tab\t</div> <!-- end left content -->\n$tab</div> <!-- end left division -->\n");
}

/* Load Static.php for all static items */

$TmpLoad = "./dynamic.php";
include $TmpLoad;
$TmpLoad = "./static.php";
include $TmpLoad;
?>