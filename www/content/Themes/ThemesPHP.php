<?php
	namespace Content\PHP;
	
	require_once "./CausAPI/theme.php";
	
	// The default if nothing changes it
	$style = \Caus\Theme\Themes();
	
	$JSON_DATA = file_get_contents("./content/Themes/ThemesDATA.json");
	$ContentData = json_decode($JSON_DATA, true);
	$ThemesArray = $ContentData["DES"];
	$ThemeArray = $ThemesArray[$style];
	$ThemesList = $ContentData["LIST"];
	
	function ListThem($ListArray, $CurrentSelection){
		
		foreach ($ListArray as $ListItem) {
			if ($ListItem["ShortName"] == $CurrentSelection) {
				echo("\t<option value='" . $ListItem["ShortName"] . "' selected=\"selected\">" . $ListItem["Full Name"] . "</option>\n");
			} else {
				echo("\t<option value='" . $ListItem["ShortName"] . "'>" . $ListItem["Full Name"] . "</option>\n");
			}
		}
	}
?>