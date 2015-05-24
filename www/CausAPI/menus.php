<?php

namespace Caus\Menus;

function SideMenu($SidebarName, $SourcePageName) {
	global $tabs, $SidebarDB;
	if ($SidebarName != "None"){
		$found = array_key_exists($SidebarName, $SidebarDB);
		if ($found = true){
			$Sidebar = $SidebarDB[$SidebarName];
		}else{
			$Sidebar = $SidebarDB["Main"];
		}
		echo "$tabs[5]<ul class='sidemenu'>";
		echo "$tabs[6]<li>Navigation</li>";
		foreach ($Sidebar as $Item) {
			\Caus\Menus\__SideMenuItem($Item, $SourcePageName);
		}
		echo "$tabs[5]</ul>$tabs[0]";
	}
}

function __SideMenuItem($Item, $SourcePageName) {
	global $tabs;
	if ($Item["PageName"] == $SourcePageName) {
		echo "$tabs[6]<li><b>" . $Item["Text"] . "</b></li>";
	} else{
		echo "$tabs[6]<li><a href=\"" . $Item["Link"] . "\">" . $Item["Text"] . "</a></li>";
	}
}

function TopMenu($MainMenuName, $SourcePageName) {
	global $tabs, $MainMenuDB;
	if ($MainMenuName != "None"){
		$found = array_key_exists($MainMenuName, $MainMenuDB);
		if ($found = true){
			$Menu = $MainMenuDB[$MainMenuName];
		}else{
			$Menu = $MainMenuDB["Main"];
		}
		echo "$tabs[4]<ul class='mainmenu'>";
		foreach ($Menu as $Item) {
			\Caus\Menus\__TopMenuItem($Item, $SourcePageName);
		}
		echo "$tabs[4]</ul>$tabs[0]";
	} else {
		echo "$tabs[4]<hr />";
	}
}
function __TopMenuItem($Item, $SourcePageName) {
	global $tabs;
	if ($Item["PageName"] == $SourcePageName) {
		echo "$tabs[4]<li class='active menuitem'><a>" . $Item["Text"] . "</a></li>";
	} else{
		echo "$tabs[4]<li class='menuitem'><a class='link' href=\"" . $Item["Link"] . "\">" . $Item["Text"] . "</a></li>";
	}
}

?>