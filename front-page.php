<?php
/*
Template Name: Home page
*/
get_header(); ?>
			<div class="wrapper">
				<ul id="banners">
					<li id="banner1"><a href="http://mcribbs.net/dev/?page_id=1043">Bed &amp; Breakfast</a></li>
					<li id="banner2"><a href="http://mcribbs.net/dev/?page_id=1045">Doggie Daycare</a></li>
					<li id="banner3"><a href="http://mcribbs.net/dev/?page_id=1048">Grooming &amp; Spa</a></li>
				</ul>
				<!-- slider begin -->
				<div id="faded">
					<div class="rap">
						<img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="" width="511" height="303" />
						<img src="<?php bloginfo('template_url'); ?>/images/img2.jpg" alt="" width="511" height="303" />
						<img src="<?php bloginfo('template_url'); ?>/images/img3.jpg" alt="" width="511" height="303" />
						<img src="<?php bloginfo('template_url'); ?>/images/img4.jpg" alt="" width="511" height="303" />
						<img src="<?php bloginfo('template_url'); ?>/images/img5.jpg" alt="" width="511" height="303" />
					</div>
				</div>
				<!-- slider end -->
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 3,
				  interval: 30000,
				  width: 196,
				  height: 249,
				  theme: {
				    shell: {
				      background: '#fbfbfd',
				      color: '#8e846b'
				    },
				    tweets: {
				      background: '#fbfbfd',
				      color: '#8e846b',
				      links: '#8b7e63'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: false,
				    live: true,
				    behavior: 'all'
				  }
				}).render().setUser('newyorkdognanny').start();
				</script>
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
