<?php

	namespace Content;
	//This has A LOT OF PHP (and JSON) so it has been split into the main print, the main PHP and a DATA JSON file(s?).
	require "./content/Themes/ThemesPHP.php"

?>

<!-- Content Code -->


<!-- Meta Data about Current Theme -->
<h3 class="featured_heading">Current Theme: <?php echo($ThemeArray["Full Name"]); ?></h3>
<p class="featured_paragraph end"><?php echo($ThemeArray["Description"]) ?></p>

<!-- Change Theme -->
<h3>Change Theme</h3>
<form action="./index.php" method="get"  class="end">
<!--<input type="hidden" name="page" value="Themes"  required="required" />-->
<input type="hidden" name="DEV" value="Themes"/>
<?php \Content\PHP\ListThem($ThemesList, $style); ?>
<input type="submit" value="Submit">
</form>

<!-- END Content Code -->