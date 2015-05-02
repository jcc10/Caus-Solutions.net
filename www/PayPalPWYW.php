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
						sd_side("Online Donations");
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

					<!-- Why pay you? -->
					<h3 class="top_main_heading">Why pay you?</h3>
					<p>This website costs money to operate, and at the moment I am operating this business as a... experiment. I don't think that I will ever stop helping people <i>but if I have to get a full time job to support myself I will not have as much time to work on this</i>.
					</p>
					<h3>What can I do?</h3>
					<p>You can donate some money to me! I have set this up to state where you are donating to, such as Neighbourhood Tech-Support, Outreach, or the Fake AD tool!</p>
					<h3 id=pay>Pay-What-You-Want</h3>
					<form name="_xclick" action="https://www.paypal.com/us/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_xclick"  required />
					<input type="hidden" name="business" value="swc24601@gmail.com"  required />
					<input type="hidden" name="currency_code" value="USD"  required /><select name="item_name" required>
						<option value="DOT-Tech-Support">Tech-Support</option>
						<option value="DOT-Outreach">Outreach</option>
						<option value="DOT-AD's">Fake AD's tool</option>
						<option value="DOT-Multiple">Multiple</option>
						<option value="DOT-Other">Other</option>
					</select>
					&nbsp; $ &nbsp;
					<input type="text" name="amount" value="5.00" placeholder="Enter Amount Here" required />
					<input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="height:20px;"/>
					</form>
					<p style="padding-top:0px;"><b>Please note that all items have a prefix of &nbsp;<i>DOT</i>&nbsp; to indicate it was taken through the website.<br />
					<u>WE ARE NOT A 501-C GROUP.</u></b></p>
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
