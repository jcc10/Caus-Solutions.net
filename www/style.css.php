<?php
    
	$defaultCSS = "CoolIce";
	
	require "./style.php";
	
	heads();
?>
body {
	/* <?php echo($style); ?> */
	font-family:arial, verdana, helvetica, sans-serif;
	font-size:12px;
	/* cursor:default; */
	background: -moz-linear-gradient(<?php Color("BG Top"); ?> 0%, <?php Color("BG Bottom"); ?> 480px);
	background: -webkit-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: -o-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: -ms-linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background: linear-gradient(<?php Color("BG Top"); ?> 0%,<?php Color("BG Bottom"); ?> 480px);
	background-repeat: no-repeat;
	background-color: <?php Color("BG Main"); ?>;
}
* {
	margin: 0px;
	padding: 0px;
	text-decoration: none;
}
html {
	height:100%;
	margin-bottom:1px;
}
#container {
  background: <?php Color("Container"); ?>;
	width: 840px;
  margin: 0 auto;
  box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
  -moz-box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
  -webkit-box-shadow: 0 0 6px <?php Color("Container Shadow"); ?>;
}
#banner {
	cursor:default;
	width:100%;
	padding-top:15px;
	margin-left:10px;
	margin-right:10px;
	max-width:97%;
}
.spacer {
	width:100%;
	height:15px;
}
hr {
	border:0px;
	color:<?php Color("Banner Line"); ?>;
	background-color:<?php Color("Banner Line"); ?>;
	height: 1px;
	width: 100%;
	text-align: center;
}
h1 {
	font-size:28px;
	color:<?php Color("Banner Main"); ?>;
	font-family:Arial, Verdana, Helvetica, sans-serif;
	font-weight:300;
}
h2 {
	font-size:20px;
	color:<?php Color("Banner Sub"); ?>;
	font-family:Arial, Verdana, Helvetica, sans-serif;
	font-weight:300;
}
h3 {
	cursor:default;
	color:<?php Color("Content Title"); ?>;
	font-size:15px;
	background-color:<?php Color("Content Title BG"); ?>;
	border-width:1px;
	border-color:<?php Color("Content Border"); ?>;
	border-style:solid;
	text-align:left;
	margin-left:20px;
	margin-right:20px;
	font-weight:300;
	padding:5px;
}
.top_main_heading {
	margin-top:15px;
}
.featured_heading {
	font-size:20px;
	margin-top:15px;
}
#left {
	float:left;
	width:23%;
	color:<?php Color(""); ?>;
}
/*#leftcontent p {
	color:<?php Color(""); ?>;
	background-color:<?php Color(""); ?>;
	font-size: 12px;
	text-align:left;
	margin-left:20px;
	margin-right:20px;
}*/
#leftcontent ul.sidemenu {
	cursor:default;
	list-style:none;
	padding-left:20px;
	color:<?php Color("Side Title"); ?>;
	border: 0px;
}
#leftcontent a {
	color:<?php Color("Side Main"); ?>;
	text-decoration:none;
	font-size:15px;
}
#leftcontent a:hover {
	color:<?php Color("Side Main Hover"); ?>;
	text-decoration:underline;
	font-size:15px;
}
#leftcontent b {
	color:<?php Color("Side Selected"); ?>;
	text-decoration:none;
	font-size:15px;
}
#leftcontent b:hover {
	color:<?php Color("Side Selected Hover"); ?>;
	text-decoration:none;
	font-size:15px;
}
/*.news {
	color:#999999;
	border-bottom:1px;
	border-left:1px;
	border-right:1px;
	border-top:0px;
	border-style:solid;
	border-color:#AAAAAA;
	background-color:#FFFFFF;
	line-height:20px;
	padding:5px;
}*/
#main {
	float:right;
	width:76%;
	padding-bottom:20px;
	/*background:url('http://static.caus-solutions.com/img/virt_line.png');
	background-repeat: repeat-y;*/
	border-left: thin solid <?php Color("Side Line"); ?>
}
#maincontent p.end, form.end, ul.end, p.last, form.last, ul.last {
	border-bottom:1px;
	border-style:solid;
	margin-bottom:15px;
	border-color:<?php Color("Content Border"); ?>;
}
#maincontent p, form, ul {
	cursor:default;
	color:<?php Color("Content Body"); ?>;
	background-color:<?php Color("Content Body BG"); ?>;
	border-bottom:0px;
	border-left:1px;
	border-right:1px;
	border-top:0px;
	border-style:solid;
	border-color:<?php Color("Content Border"); ?>;
	margin-left:20px;
	margin-right:20px;
	line-height:20px;
	padding:20px;
}
p.featured_paragraph {
    font-size:15px;
}

#maincontent a {
	color:<?php Color("Content Link"); ?>;
	text-decoration:none;
}
#maincontent a:hover {
	color:<?php Color("Content Link Hover"); ?>;
	text-decoration:underline;
}

#footer {
	cursor:default;
	clear:both;
	width:840px;
	font-size:12px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
}
#footer hr {
	border:0px;
	color:<?php Color("Footer Line"); ?>;
	background-color:<?php Color("Footer Line"); ?>;
	height: 1px;
	width: 100%;
	text-align: center;
}
#footer a {
	color:<?php Color("Footer Text Link"); ?>;
	text-decoration:none;
}
#footer a:hover {
	color:<?php Color("Footer Text Link"); ?>;
	text-decoration:underline;
}
#footer img{
    height: <?php StrVar("Image Size Footer"); ?>;
}
#footer img:hover{
    height: <?php StrVar("Image Size Footer Hover"); ?>;
}
.right {
	color:<?php Color("Footer Text"); ?>;
	float:right;
	font-size:100%;
	margin-top:5px;
}
.left {
	color:<?php Color("Footer Text"); ?>;
	float:left;
	font-size:100%;
	margin-top:5px;
}