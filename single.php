<?php get_header(); ?>
		</div>
		<!--header end-->		
	</div>
</div><div class="main">
<!--content -->
<div id="content">
	<div class="col2">
		<div class="wrapper">
			<?php include (TEMPLATEPATH . '/theloop.php'); ?>
		</div>
		<div class="navigation">
			<p class="nav-previous"><?php previous_post(); ?></p>
			<p class="nav-next"><?php next_post(); ?></p>
		</div>
	</div>
	<div class="col1">
		<?php get_sidebar(); ?>
	</div>
</div>
<!--content end-->
<?php get_footer(); ?>
