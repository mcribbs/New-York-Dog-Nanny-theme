<?php
/*
Template Name: Home page
*/
get_header(); ?>
			<div class="wrapper">
				<ul id="banners">
					<li id="banner1"><a href="#">Day care</a></li>
					<li id="banner2"><a href="#">Cage free<br />boarding</a></li>
					<li id="banner3"><a href="#">Spa</a></li>
				</ul>
				<!-- slider begin -->
				<div id="faded">
					<div class="rap">
						<img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="" width="675" height="400" />
						<img src="<?php bloginfo('template_url'); ?>/images/img2.jpg" alt="" width="675" height="400" />
						<img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt="" width="675" height="400" />
						<img src="<?php bloginfo('template_url'); ?>/images/img4.jpg" alt="" width="675" height="400" />
						<img src="<?php bloginfo('template_url'); ?>/images/img5.jpg" alt="" width="675" height="400" />
					</div>
				</div>
				<!-- slider end -->
			</div>
		</div>
		<!--header end-->		
	</div>
</div>
<div class="main">
<!--content -->
<div class="wrapper">
	<div id="welcome">
		<?php include (TEMPLATEPATH . '/theloop.php'); ?>
	</div>
</div>
<!--content end-->
<?php get_footer(); ?>
