<?php

namespace Caus\Menus;

function SideMenu($SidebarName, $SourcePageName) {
	global $tabs, $SidebarDB;
	$found = array_key_exists($SidebarName, $SidebarDB);
	if ($found = true){
		$Sidebar = $SidebarDB[$SidebarName];
	}else{
		$Sidebar = $SidebarDB["Main"];
	}
	echo "$tabs[5]<ul class='sidemenu'>";
	echo "$tabs[6]<li>Navigation</li>";
	foreach ($Sidebar as $ID => $Item) {
		\Caus\Menus\__SideMenuItem($Item, $SourcePageName);
	}
	echo "$tabs[5]</ul>$tabs[0]";
}

function __SideMenuItem($Item, $SourcePageName) {
	global $tabs;
	$tab = "\t\t\t\t\t\t";
	if ($Item["PageName"] == $SourcePageName) {
		echo "$tabs[6]<li><b>" . $Item["Text"] . "</b></li>";
	} else{
		echo "$tabs[6]<li><a href=\"" . $Item["Link"] . "\">" . $Item["Text"] . "</a></li>";
	}
}

function TopMenu() {
	//TODO
	Null;
}

?>