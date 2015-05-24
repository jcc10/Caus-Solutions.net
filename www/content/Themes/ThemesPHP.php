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
			if ($ListItem["ShortName"] == "disabled") {
				echo("\t" . $ListItem["Full Name"] . "<br />\n");
			} elseif ($ListItem["ShortName"] == $CurrentSelection) {
				echo("\t<input type='radio' name='style' value='" . $ListItem["ShortName"] . "' checked />" . $ListItem["Full Name"] . "<br />\n");
			} else {
				echo("\t<input type='radio' name='style' value='" . $ListItem["ShortName"] . "' />" . $ListItem["Full Name"] . "<br />\n");
			}
		}
	}
?>