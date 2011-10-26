<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_url'); ?>/layout.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 7]>
	   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie_png.js"></script>
	   <script type="text/javascript">
		   ie_png.fix('#logo');
	   </script>
	<![endif]-->

	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cufon-replace.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/RomanSerif_500.font.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.faded.js" type="text/javascript"></script>
	
	<?php wp_head(); ?>
</head>

<body>
	<div class="extra">
		<div class="body1">
			<div class="main">
				<!--header -->
				<div id="header">
					<div class="wrapper">
						<div id="headercallout">
							<?php /* WordPress Widget Support */ if (function_exists('dynamic_sidebar') and dynamic_sidebar('Header callout')) { }  ?>
						</div>
						<ul id="menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 
								'sort_column' => 'menu_order', 
								'container' => false, 
								'items_wrap' => '%3$s',
								'link_before' => '<span><span>',
								'link_after' => '</span></span>') ); ?>
						</ul>
						<a href="http://mcribbs.net/dev/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" id="logo" alt="" /></a>
					</div>
