<!--
	<?php printf(__('<a href="%1$s">RSS Entries</a> and <a href="%2$s">RSS Comments</a>','k2_domain'), get_bloginfo('rss2_url'), get_bloginfo('comments_rss2_url')) ?>
-->
	<!--footer -->
	<div id="footer">
	<?php /* WordPress Widget Support */ if (function_exists('dynamic_sidebar') and dynamic_sidebar('Footer')) { }  else { ?>
		Care &copy; 2010  &nbsp;|&nbsp;  <a href="index-5.html">Privacy policy</a><br />
		<!-- {%FOOTER_LINK} -->		
	<?php } ?>
	<div id="powered-by" class="wrapper">Copyright © 2011 New York Dog Nanny | Powered by <a href="http://www.wordpress.org/">WordPress</a> | <a href="/blog//wp-admin/">Admin Login</a></div>
	</div>
	</div>
	<div id="bot"></div>
	<!--footer end-->
</div>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
$(function(){
  $("#faded").faded({
	speed: 1200,
	crossfade: true,
	bigtarget: true,
	autoplay: 4800,
	autorestart: 1200,
	autopagination: true
  });
});
</script>
<?php wp_footer(); ?>
</body>
</html>