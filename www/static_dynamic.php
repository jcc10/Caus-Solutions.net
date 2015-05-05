<?php

$settings = array();
// include trailing sash here.
$settings["Location"] = "/WebFiles/caus-solutions.net/www/";

/* Static Dynamic Items (This is going into the DB along with the content of pages) */
function StaticDynamic_side($origin) {
	global $settings;
	$tab = "\t\t\t\t\t\t";
	echo "<ul>\n";
	echo "$tab<li>Navigation</li>\n";
	//items to be moved to DB Soon...
	$TmpItem = array();
	$TmpItem["Text"] = "Home";
	$TmpItem["Link"] = $settings["Root"] . "/index.php";
	$TmpItem["PageName"] = "Home";
	Static_sidebar_item($TmpItem, $origin);
	$TmpItem["Text"] = "On-line Support Tickets";
	$TmpItem["Link"] = "http://tickets.caus-solutions.com/";
	$TmpItem["PageName"] = Null;
	Static_sidebar_item($TmpItem, $origin);
	$TmpItem["Text"] = "Our Services";
	$TmpItem["Link"] = $settings["Root"] . "/Services.php";
	$TmpItem["PageName"] = "Services";
	Static_sidebar_item($TmpItem, $origin);
	$TmpItem["Text"] = "Fake Ad's";
	$TmpItem["Link"] = "http://fake.ads.caus-solutions.net";
	$TmpItem["PageName"] = Null;
	Static_sidebar_item($TmpItem, $origin);
	$TmpItem["Text"] = "Community Jar";
	$TmpItem["Link"] = $settings["Root"] . "/PayPalPWYW.php";
	$TmpItem["PageName"] = "CommunityJar";
	Static_sidebar_item($TmpItem, $origin);
	//item("Website Design", "Website.php", $origin);
	//item("Business Support Contracts", "#", $origin);
	echo "					</ul>\n";
}

/* Load Static.php for all static items */

$TmpLoad = $settings["Location"] . "dynamic.php";
include $TmpLoad;
$TmpLoad = $settings["Location"] . "static.php";
include $TmpLoad;

?>