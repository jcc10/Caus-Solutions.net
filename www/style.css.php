<?php
    header("Content-type: text/css; charset: UTF-8");
	//looks through the Style Dir for the style, prevents errors.
	
	$listoffiles = scandir("./JSON/STYLES/");
	function FindStyle($StyleName){
		$stylePP = $StyleName . ".json";
		global $listoffiles;
		$Found = False;
		foreach($listoffiles as $file) {
			if (($file == ".") or ($file == "..")) {
				Null;
			} else {
				if ($file == "$stylePP"){
					$Found = True;
				}
			}
		}
		return $Found;
	}

	//Colours
	if (empty($_GET["style"]) != True){
		$style = $_GET["style"];
		
		$Found = FindStyle($style);
		if ($Found == True) {
			$day = 86400;
			$exptime = (($day/24)/30);
			/*name is your cookie's name
			value is cookie's value
			$int is time of cookie expires*/
			setcookie("style",$style,time()+$exptime);
		}else{
			if (empty($_COOKIE["style"]) != True){
				$style = $_COOKIE["style"];
			}else{
				$style = "CoolIce";
				
				$day = 86400;
				$exptime = (($day/24)/30);
				/*name is your cookie's name
				value is cookie's value
				$int is time of cookie expires*/
				setcookie("style",$style,time()+$exptime);
			}
		}
	} else {
		if (empty($_COOKIE["style"]) != True){
			$style = $_COOKIE["style"];
		}else{
			$style = "CoolIce";
			
			$day = 86400;
			$exptime = (($day/24)/30);
			/*name is your cookie's name
			value is cookie's value
			$int is time of cookie expires*/
			setcookie("style",$style,time()+$exptime);
		}
	}
	
	$Found = FindStyle($style);
	
	if ($Found == True) {
		Null;
	} else {
		$style = "CoolIce";
	}
	
	$JSON_CSS = file_get_contents("./JSON/STYLES/" . $style . ".json");
	$CSS = json_decode($JSON_CSS, true);
	$Colours = $CSS["Colours"];
	
	
	function Color($ColorName){
		global $Colours;
		if ($ColorName == "") {
			echo("rgba(0,0,0,0)");
		} else {
			$Color = $Colours[$ColorName];
			$len = count($Color);
			if ($len == 1) {
				echo("rgb(" . $Color[0] . ", " . $Color[0] . ", " . $Color[0] . ")");
			} elseif ($len == 3){
				echo("rgb(" . $Color[0] . ", " . $Color[1] . ", " . $Color[2] . ")");
			} elseif ($len == 4){
				echo("rgba(" . $Color[0] . ", " . $Color[1] . ", " . $Color[2] . ", " . $Color[3] . ")");
			}
		}
	}
?>
body {
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
	width:200px;
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
#leftcontent ul {
	cursor:default;
	list-style:none;
	padding-left:20px;
	color:<?php Color("Side Title"); ?>;
}
#leftcontent a {
	color:<?php Color("Side Main"); ?>;
	text-decoration:none;
	font-size:16px;
}
#leftcontent a:hover {
	color:<?php Color("Side Main Hover"); ?>;
	text-decoration:underline;
}
#leftcontent b {
	color:<?php Color("Side Selected"); ?>;
	text-decoration:none;
	font-size:16px;
}
#leftcontent b:hover {
	color:<?php Color("Side Selected Hover"); ?>;
	text-decoration:none;
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
	float:left;
	width:639px;
	padding-bottom:20px;
	/*background:url('http://static.caus-solutions.com/img/virt_line.png');
	background-repeat: repeat-y;*/
	border-left: thin solid <?php Color("Side Line"); ?>
}
#maincontent p {
	cursor:default;
	color:<?php Color("Content Body"); ?>;
	background-color:<?php Color("Content Body BG"); ?>;
	border-bottom:1px;
	border-left:1px;
	border-right:1px;
	border-top:0px;
	border-style:solid;
	border-color:<?php Color("Content Border"); ?>;
	margin-left:20px;
	margin-right:20px;
	margin-bottom:15px;
	line-height:20px;
	padding:20px;
}
.featured_paragraph {
    font-size:15px;
}
.NoBottom {
    font-size:15px;
    border-bottom:0px;
	margin-bottom:0px;
}
#maincontent form {
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
	margin-bottom:0px;
	line-height:20px;
	padding:20px;
	font-size:15px;
}
#maincontent ul {
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
	margin-bottom:0px;
	line-height:20px;
	padding:20px;
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
#footer a {
	color:<?php Color("Footer Text Link"); ?>;
	text-decoration:none;
}
#footer a:hover {
	color:<?php Color("Footer Text Link"); ?>;
	text-decoration:underline;
}
#footer img{
    height: 18px
}
#footer img:hover{
    height: 20px
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