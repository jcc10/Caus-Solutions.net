<?php
	/*	Settings moved to dynamic.json, edit that	*/
	//
	$JSON_settings = file_get_contents("./dynamic.json");
	$settings = json_decode($JSON_settings, true);
	
	$__Subs = $settings["Subtitles"];
	$__Subscount = count($__Subs) - 1;
	$__RandomSub = rand(0,$__Subscount);
	
	$settings["Subtitle"] = $__Subs[$__RandomSub];
?>