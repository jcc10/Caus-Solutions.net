<?php

	namespace Content;
	//This has A LOT OF PHP (and JSON) so it has been split into the main print, the main PHP and a DATA JSON file(s?).
	require "./content/Themes/ThemesPHP.php"

?>

<!-- Content Code -->


<!-- Library TS -->
<h3 class="featured_heading">Current Theme: <?php echo($ThemeArray["Full Name"]); ?></h3>
<p class="featured_paragraph end"><?php echo($ThemeArray["Description"]) ?></p>

<!-- Antivirus -->
<h3>Antivirus Scans</h3>
<form action="./index.php" method="get"  class="end">
<!--<input type="hidden" name="page" value="Themes"  required />-->
<input type="hidden" name="DEV" value="Themes"  required />
<select name="style" required>
<?php \Content\PHP\ListThem($ThemesList, $style); ?>
</select>
<input type="submit" value="Submit">
</form>

<!-- END Content Code -->