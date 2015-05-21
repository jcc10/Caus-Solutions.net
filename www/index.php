<?php

	require_once "./CausAPI/theme.php";
	require_once "./CausAPI/load.php";
	require_once "./CausAPI/header.php";
	require_once "./CausAPI/menus.php";
	require_once "./CausAPI/body.php";
	require_once "./CausAPI/footer.php";
	
	$tabs = array("\n","\n\t","\n\t\t","\n\t\t\t","\n\t\t\t\t","\n\t\t\t\t\t","\n\t\t\t\t\t\t","\n\t\t\t\t\t\t\t");
	
	$CWD = getcwd();
	
	
	// PreLoad function (Loads all the core settings)
	\Caus\Load\PreLoad();
	
	// DBload function (Loads from JSON DB files or MySQL DB)
	\Caus\Load\DB_Loader();
	
	// Main load function
	\Caus\Load\main();
	
	// Main Header Function
	\Caus\Head\main();
	
	// Main Body Function.
	\Caus\Body\main();
	

	//And now we have the footer! (Finally!)

	\Caus\Footer\main();
	
	//END OF PAGE, NO CONTENT BELOW HERE!!!!!!!!!
	echo("$tabs[1]</body>$tabs[0]$tabs[0]</html>");
?>