<?php
	namespace Content\PHP;
	
	// The default if nothing changes it
	$style = "CoolIce";
	if (empty($_COOKIE["style"]) != True){
		$style = $_COOKIE["style"];
	}
	if (empty($_GET["style"]) != True){
		$style = $_GET["style"];
	}
	
	$JSON_DATA = file_get_contents("./content/ThemesDATA.json");
	$ContentData = json_decode($JSON_DATA, true);
	$ThemesArray = $ContentData["DES"];
	$ThemeArray = $ThemesArray[$style];
	$ThemesList = $ContentData["LIST"];
	
	function ListThem($ListArray, $CurrentSelection){
		
		foreach ($ListArray as $ListItem) {
			if ($ListItem["ShortName"] == $CurrentSelection) {
				echo("<option value='" . $ListItem["ShortName"] . "' selected=\"selected\">" . $ListItem["Full Name"] . "</option>\n");
			} else {
				echo("<option value='" . $ListItem["ShortName"] . "'>" . $ListItem["Full Name"] . "</option>\n");
			}
		}
	}
?>