<?php

namespace Caus\Load;

//The PreLoad function
function PreLoad() {
	global $settings, $CWD;
	$file = $CWD . "/JSON/dynamic.json";
	$JSON_settings = file_get_contents($file);
	$settings = json_decode($JSON_settings, true);
	
	$__Subs = $settings["Subtitles"];
	$__Subscount = count($__Subs) - 1;
	$__RandomSub = rand(0,$__Subscount);
	
	$settings["Subtitle"] = $__Subs[$__RandomSub];
}

//The DBload function
function DB_Loader() {
	global $SidebarDB,$MainMenuDB, $CWD;
	//Load JSON stuff
	$file = $CWD . "/JSON/sidebars.json";
	$JSON_Sidebars = file_get_contents($file);
	$SidebarDB = json_decode($JSON_Sidebars, true);
	$file = $CWD . "/JSON/main_menu.json";
	$JSON_MainMenu = file_get_contents($file);
	$MainMenuDB = json_decode($JSON_MainMenu, true);
}

// Updates Subtitle if there is a updated subtitle.
function UpdateSub(){
	global $Page, $PageData, $settings;
	
	if ($PageData["Subtitle"] != "None") {
		$settings["Subtitle"] = $PageData["Subtitle"];
	}
	
}

function PageExsists($PageName, $Mode="Secure") {
	global $CWD, $PageData;
	$listoffiles = scandir("$CWD/content/");
	$Found = False;
	$Locked = False;
	foreach ($listoffiles as $file){
		preg_match("/(.+)\.json/", $file, $regmatch);
		if (count($regmatch) == 2){
			if ($regmatch[1] == $PageName) {
				$JSON_PAGE = file_get_contents("$CWD/content/" . $regmatch[1] . ".json");
				$PageData = json_decode($JSON_PAGE, true);
				if ($PageData["Enabled"] == True) {
					$Found = True;
				}else{
					$Found = True;
					$Locked = True;
				}
			}
		}

	}
	if ($Found == True) {
		if (($Locked == True) and ($Mode == "Secure")) {
			http_response_code(423);
			$JSON_PAGE = file_get_contents("$CWD/content/423.json");
			$PageData = json_decode($JSON_PAGE, true);
		}
	} else {
		http_response_code(404);
		$JSON_PAGE = file_get_contents("$CWD/content/404.json");
		$PageData = json_decode($JSON_PAGE, true);
	}
}

function main(){
	global $PageData;
	// Loads what the page is based off of the GET-"Page"
	if (empty($_GET["page"]) != True){
		$page = $_GET["page"];
	} else {
		$page = "Home";
	}
	
	$Secure = "Secure";
	// Overwrites the above if it is GET-"DEV"
	//* Make a block comment here if you are not editing your site, this is a MAJOR security hole (TODO: ADD CONFIG OPTION)
	if (empty($_GET["DEV"]) != True){
		$page = $_GET["DEV"];
		$Secure = "Insecure";
	}
	/**/
	// Trys to find the file in the database. (True if found)
	PageExsists($page, $Secure);
	
	UpdateSub();
	
}

?>