<?php
include "/WebFiles/caus-solutions.net/www/static_dynamic.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Cáus-Solutions: Home</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="container">
			<div id="header">
				<?php Static_banner(); ?>
			</div> <!-- end header -->

			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php StaticDynamic_side("Home"); ?>
					<p>&nbsp;</p><!--
					<h3>News</h3>
					<p class="news">
						1/14 | Idea conceived<br />
						1/17 | Semester starts<br />
						1/19 | Design completed
					</p> -->
				</div> <!-- end left content -->
			</div> <!-- end left division -->
			<div id="main">
				<div id="maincontent">

					<!-- Who are we? -->
					<h3 class="top_main_heading">Who are we?</h3>
					<!-- Still having some issues with style sheets, need to fix... -->
					<p class="NoBottom" style="margin-bottom:0px; border-bottom:0px;">We provide Tech Support for a variety of situations, It is Pay What You Want / Pay What You Can to suit your needs and income.<br />&nbsp;<br /> Our Services include:</p>
					<ul style="border-bottom:0px;">
						<li>Antivirus Scans</li>
						<li>Hardware Checks and Upgrades</li>
						<li>Computer Vacuuming</li>
						<li>Network set-up</li>
						<li>Operating system Upgrades</li>
						<li>And More!</li>
					</ul>
					<p class="featured_paragraph"> Click <a href="Services.html">HERE</a> for a full list!
					</p>
					
					<!-- Website Setup -->
					<h3>Website Setup</h3>
					<p>Feel free to ask about our website setup and maintenance for your business! We provide help setting up and maintaining your website.</p>
					
					<!-- How to get help! -->
					<h3>How to get help!</h3>
					<p>You can put a ticket in through the link on the side or by clicking <em><a href="http://tickets.caus-solutions.com/">here!</a></em> You can also phone us at <strong>916.234.0522</strong>!</p>
					
					<!-- About us. -->
					<h3>About us.</h3>
					<p>Cáus Solutions started early 2014 as a small business by Joshua Cline, we provide Tech-support to those who could really use it! We oporate out of the Orangvale area and service Citrus Hights, Folsom, Fair Oaks, and Roseville.</p>
				</div> <!-- end main content section -->
			</div> 
			<div id="footer"><div class="spacer"></div>
				<?php Static_Footer(); ?>
			</div> <!-- end footer -->

		</div> <!-- end container -->
	</body>

</html>
