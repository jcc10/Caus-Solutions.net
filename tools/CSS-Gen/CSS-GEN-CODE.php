<?php

	// All the code for the style sheets, this makes the style sheet smaller!

	//looks through the Style Dir for the style, prevents errors.
	$listoffiles = scandir("./THEME-JSON/");
	function FindStyle($StyleName){
		$stylePP = $StyleName . ".json";
		global $listoffiles;
		$Found = False;
		foreach($listoffiles as $file) {
			if (($file == ".") or ($file == "..")) {
				Null;
			} else {
				if ($file == "$stylePP"){
					$Found = True;
				}
			}
		}
		return $Found;
	}

	//Get the name of the style
	if (empty($_GET["style"]) != True){
		$style = $_GET["style"];
		
		$Found = FindStyle($style);
		if ($Found == True) {
			Null;
		}else{
			$style = $defaultCSS;
		}
	}
	$Found = FindStyle($style);
	if ($Found == True) {
		Null;
	} else {
		$style = $defaultCSS;
	}
	
	// Sets the variables
	$JSON_CSS = file_get_contents("./THEME-JSON/" . $style . ".json");
	$CSS = json_decode($JSON_CSS, true);
	$Colours = $CSS["Colours"];
	$Variables = $CSS["Variables"];
	
	// Gets the colour from the array and echo's it.
	function Color($Arch="", $Name=""){
		global $Colours;
		if ((($Arch == "") or ($Arch == "Transparent")) or (($Name == "") or ($Name == "Transparent"))) {
			echo("transparent");
		} else {
			$Arch = $Colours[$Arch];
			$Color = $Arch[$Name];
			if ($Color[0] == "HEX") {
				echo("#" . $Color[1]);
			} elseif ($Color[0] == "RGB") {
				echo("rgb(" . $Color[1] . ", " . $Color[2] . ", " . $Color[3] . ")");
			} elseif ($Color[0] == "RGBC") {
				echo("rgb(" . $Color[1] . ", " . $Color[1] . ", " . $Color[1] . ")");
			} elseif ($Color[0] == "RGBA"){
				echo("rgba(" . $Color[1] . ", " . $Color[2] . ", " . $Color[3] . ", " . $Color[4] . ")");
			} elseif ($Color[0] == "Transparent") {
				echo("transparent");
			}
		}
	}
	// Gets the colour from the array and returns it.
	function Colour($Arch="", $Name=""){
		global $Colours;
		if ((($Arch == "") or ($Arch == "Transparent")) or (($Name == "") or ($Name == "Transparent"))) {
			return("transparent");
		} else {
			$Arch = $Colours[$Arch];
			$Color = $Arch[$Name];
			if ($Color[0] == "HEX") {
				return("#" . $Color[1]);
			} elseif ($Color[0] == "RGB") {
				return("rgb(" . $Color[1] . ", " . $Color[2] . ", " . $Color[3] . ")");
			} elseif ($Color[0] == "RGBC") {
				return("rgb(" . $Color[1] . ", " . $Color[1] . ", " . $Color[1] . ")");
			} elseif ($Color[0] == "RGBA"){
				return("rgba(" . $Color[1] . ", " . $Color[2] . ", " . $Color[3] . ", " . $Color[4] . ")");
			} elseif ($Color[0] == "Transparent") {
				return("transparent");
			}
		}
	}
	
	
	// Finds other variables that are not colours
	function StrVar($VariableName) {
		global $Variables;
		$TMP = $Variables[$VariableName];
		$Type = gettype($TMP);
		if ($Type == "string"){
			echo($TMP);
		} else {
			$TMPe = "Expected String, Was not String! - " . $Type . " - " . $TMP;
			throw new Exception($TMPe);
		}
	}
	function ArrVar($VariableName) {
		global $Variables;
		$TMP = $Variables[$VariableName];
		$Type = gettype($TMP);
		if ($Type == "array"){
			echo($TMP);
		} else {
			$TMPe = "Expected String, Was not String! - " . $Type . " - " . $TMP;
			throw new Exception($TMPe);
		}
	}
	// Sets the headder.
	function heads() {
		
		header("Content-type: text/css; charset: UTF-8");
	}
	
	
?>