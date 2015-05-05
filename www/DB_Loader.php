<?php
	//JSON Mode
	$JSON_Sidebars = file_get_contents("./sidebars.json");
	$SidebarDB = json_decode($JSON_Sidebars, true);
	$JSON_Pages = file_get_contents("./pages.json");
	$PageDB = json_decode($JSON_Pages, true);
	//MySQL Mode (Only runs if JSON is commented out)
	//TODO: Make MySQL mode :P
?>