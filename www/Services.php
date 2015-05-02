<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Cáus-Solutions: Services</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="container">
			<div id="header">
				<h1>Cáus-Solutions</h1>
				<h2><em>Pay what you want</em> Tech-support</h2>
				<br />
				<hr />

			</div> <!-- end header -->

			<div class="spacer"></div>
			<div id="left">

				<div id="leftcontent">

					<?php
						include "/WebFiles/caus-solutions.net/MY_static_dynamic.php";
						sd_con("www");
						sd_side("Our Services");
					?>
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

					<!-- Library TS -->
					<h3 class="featured_heading">Library Tech-Support</h3>
					<p class="featured_paragraph"><b>Wednesdays from 3PM to 5PM there is free Tech-Support at the Orangevale library. We provide basic help on laptops, tablets, cellphones, and E-Readers.</b></p>

					<!-- Antivirus -->
					<h3>Antivirus Scans</h3>
					<p>Whole computer antivirus scans allow peace of mind for your security on-line. Please note that the scan can take anywhere between 1 hour and 2 hours 30 minutes.</p>
					
					<!-- Windows 8/8.1 Intro -->
					<h3>Windows 8/8.1 Introduction</h3>
					<p>If you just got windows 8 or 8.1 take our introductory course, we cover all the basics to get you up to speed!</p>
					
					<!--  -->
					<!--<h3>Hardware Assessment</h3>
					<p>Are you thinking about getting a new computer? Have you checked if you can simply upgrade? If you are going to start from scratch have you looked around to see what is out there? We can help your search!</p>-->
					
					<!--  -->
					<!--<h3>Hardware Assessment</h3>
					<p>Are you thinking about getting a new computer? Have you checked if you can simply upgrade? If you are going to start from scratch have you looked around to see what is out there? We can help your search!</p>-->
					
					<!-- Hardware Assessment -->
					<h3>Hardware Assessment</h3>
					<p>Are you thinking about getting a new computer? Have you checked if you can simply upgrade? If you are going to start from scratch have you looked around to see what is out there? We can help your search!</p>
					
					<!-- Computer Vacuuming -->
					<h3>Computer Vacuuming</h3>
					<p>Sometimes your computer just gets dusty so it will shut down to prevent it from permanently breaking stuff.</p>
					
					<!-- Network set-up -->
					<h3>Network Troubleshooting and Setup.</h3>
					<p>If you are just getting internet, are upgrading to somthing faster, or are having issues with your network, we can help!</p>
					
					<!-- Operating system Upgrade -->
					<h3>Operating system Upgrading</h3>
					<p>Windows 10 is coming out in under a year if microsoft is telling the truth. They are providing free upgrades to owners of windows 7, 8, and 8.1. We can help you with moving to any of these operating systems.</p>
					
					<!-- Windows XP End of life -->
					<h3>Windows XP End Of Life</h3>
					<p>Microsoft stopped supporting XP sevral years ago, if you are still using it you <strong>are</strong> vulnerable. We can help you upgrade to another OS, or even move to another OS entirely!</p>
				</div> <!-- end main content section -->
			</div> 
			<div id="footer"><div class="spacer"></div>
				<?php
					sd_foot();
				?>
			</div> <!-- end footer -->

		</div> <!-- end container -->
	</body>

</html>
