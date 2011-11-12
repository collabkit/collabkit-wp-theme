			</div>
		</div>
	</div>
	<div id="bottom-wrap">
		<footer id="footer" class="source-org vcard copyright clearfix">
		    <div id="footer-cei-project">CollabKit is a Collaborative Education Initiative Project</div>
		    <?php wp_nav_menu( array( 'container_id' => 'menu-footer-wrap', 'menu_class' => 'clearfix','theme_location' => 'footer' ) ); ?>
		    <div id="footer-license">Content under <a href="http://creativecommons.org/licenses/by-sa/2.0/" target="_blank">CC BY-SA</a> unless otherwise noted.</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<!-- Asynchronous google analytics; this is the official snippet.
		 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
		 
	<script>
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	-->
	
</body>

</html>
