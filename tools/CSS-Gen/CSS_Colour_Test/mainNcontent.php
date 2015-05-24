
#main {
	border-left: thin solid <?php Color("Line", "Side Line"); ?>
}
#main h3 {
	color:<?php Color("Content", "Content Title"); ?>;
	background-color:<?php Color("Content", "Content Title BG"); ?>;
	border-color:<?php Color("Content", "Content Border"); ?>;
}
#maincontent p.end, form.end, ul.end, p.last, form.last, ul.last {
	border-color:<?php Color("Content", "Content Border"); ?>;
}
#maincontent p, form, ul {
	color:<?php Color("Content", "Content Body"); ?>;
	background-color:<?php Color("Content", "Content Body BG"); ?>;
	border-color:<?php Color("Content", "Content Border"); ?>;
}

#maincontent a {
	color:<?php Color("Content", "Content Link"); ?>;
}
#maincontent a:hover {
	color:<?php Color("Content", "Content Link Hover"); ?>;
}