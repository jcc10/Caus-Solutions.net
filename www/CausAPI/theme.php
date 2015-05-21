<?php

namespace Caus\Theme;

function Themes() {
	$listoffiles = scandir("./CSS/");
	$style = \Caus\Theme\__PUT_Style($listoffiles);
	return $style;
}
// FUNCTIONS FOR Themes
function __FindStyle($StyleName, $listoffiles){
	$stylePP = $StyleName . ".css";
	$Found = False;
	foreach($listoffiles as $file) {
		if (($file == ".") or ($file == "..") or $file == "physical.css") {
			Null;
		} else {
			if ($file == "$stylePP"){
				$Found = True;
			}
		}
	}
	return $Found;
}
function __PUT_Style($listoffiles) {
	global $_GET;
	if (empty($_GET["style"]) != True){
		$style = $_GET["style"];
		
		$Found = \Caus\Theme\__FindStyle($style, $listoffiles);
		if ($Found == True) {
			\Caus\Theme\__SetCookie($style);
		}else{
			$style = \Caus\Theme\__Cookie_Style($listoffiles);
		}
	} else {
		$style = \Caus\Theme\__Cookie_Style($listoffiles);
	}
	return $style;
}
function __Cookie_Style($listoffiles) {
	global $_COOKIE;
	$defaultTheme = "CoolIce";
	if (empty($_COOKIE["style"]) != True){
		$style = $_COOKIE["style"];
		$Found = \Caus\Theme\__FindStyle($style, $listoffiles);
		if ($Found == True) {
			Null;
		} else {
			$style = $defaultTheme;
			\Caus\Theme\__SetCookie($style);
		}
	}else{
		$style = $defaultTheme;
		\Caus\Theme\__SetCookie($style);
	}
	return $style;
}
function __SetCookie($style) {
	$day = 86400;
	$exptime = ($day*30);
	/*name is your cookie's name
	value is cookie's value
	$int is time of cookie expires*/
	setcookie("style",$style,time()+$exptime);
}
?>