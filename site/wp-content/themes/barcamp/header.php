<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<link rel="shortcut icon" href="favicon.ico" />
	<META name="description" content="Application Design Consulting Development Web Design">
	<META name="keywords" content="development, web, ecommerce, css, html, .net, php, ruby on rails, asp.net, philadelphia, pennsylvania, delaware, new jersey, social network, 30points, social communities"> 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	

</head>
<body>


<div id="header">
	<div id="navigation">
		<ul id="nav">
			<li class="page_item left_nav_spacer"><img src="images/left_nav_spacer1.png" /></li>
			
			<?php wp_list_pages('title_li=' ); ?>
			
			<li class="page_item right_nav_search">	
				<form method="get" id="searchform" action="http://barcamp.local/">
					<input type="text" value="" name="s" id="s" />
				</form>
				<img src="images/magnifier.png" style="padding-top: 20px;" />
			</li>
		</ul>
	</div>

</div>

	<img id="date_tag" src="images/date_tag1.png" />
	
	<!--right column-->
	<div id="right_navigation">
		<img src="images/uartslogo.jpg" style="margin: 3px 0px 0px 2px;" />
		
	</div>
	<!--right column-->
	
	
	<!--left_column-->
	<div id="left_column">
		<a href="<?php echo get_option('home'); ?>/"><img id="bc_logo" src="images/bc_logo.png" /></a>
		<a href="/sponsor"><img src="images/sponsor_logo.png" /></a><br />
		<img src="images/signup_logo_grey.png" /><br />


	</div>
	<!--left_column-->