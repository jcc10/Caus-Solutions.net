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
	global $SidebarDB, $PageDB, $CWD;
	$settings = array("DB" => "JSON");
	if ($settings["DB"] == "JSON") {
		//JSON Mode
		$file = $CWD . "/JSON/sidebars.json";
		$JSON_Sidebars = file_get_contents($file);
		$SidebarDB = json_decode($JSON_Sidebars, true);
		$file = $CWD . "/JSON/pages.json";
		$JSON_Pages = file_get_contents($file);
		$PageDB = json_decode($JSON_Pages, true);
	} elseif (($settings["DB"] == "MySQL") or ($settings["DB"] == "MYSQL") or ($settings["DB"] == "mySQL")) {
		//TODO: NOT DONE
	}
}

// The Status Code function. It only contains codes 200 and 404 right now.
function StatusCode($Code=404){
	global $PageDB, $page, $settings;
	
	if ($Code == 200) {
		$PageData = $PageDB[$page];
		if ($PageData["Subtitle"] != "None") {
			$settings["Subtitle"] = $PageData["Subtitle"];
		}
	} elseif ($Code == 404) {
		$page = "404";
		http_response_code(404);
		$PageData = $PageDB[$page];
		if ($PageData["Subtitle"] != "None") {
			$settings["Subtitle"] = $PageData["Subtitle"];
		}
	} else {
		$page = "404";
		http_response_code(404);
		$PageData = $PageDB[$page];
		if ($PageData["Subtitle"] != "None") {
			$settings["Subtitle"] = $PageData["Subtitle"];
		}
	}
	return $PageData;
}

function main(){
	global $page, $PageDB, $PageData;
	// Set local variables based off of GET requests...
	if (empty($_GET["page"]) != True){
		$page = $_GET["page"];
	} else {
		$page = "Home";
	}
	
	// Trys to find the file in the database. (True if found)
	$found = array_key_exists($page, $PageDB);
	
	// Sends ether a 404 error or a 200 OK responce code
	if ($found == True){
		$PageData = \Caus\Load\StatusCode(200);
	}else {
		$PageData = \Caus\Load\StatusCode(404);
	}
	
}

?>