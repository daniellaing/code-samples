	</div>

	<div id="footer">
		
		<div class="footer_ctn">
			<a class="top" href="#header">Back to Top</a>
			
			<div class="footer_links">
				<ul>
                	<li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/press">Press</a></a>
					<li><a href="<?php bloginfo('url'); ?>/books">Books</a></li>
					<?php wp_list_categories('title_li=&orderby=ID&order=ASC&include=4,168'); ?>
					<li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
                </ul>
			</div>
			
			<div class="copyright">
				&copy; 2011 GrassRoutes | Site Design by <a href="http://www.daniellaing.com" target="_blank">Daniel Laing</a>
			</div>
			
		</div>
		
	</div>

<?php wp_footer(); ?>
<?php if(is_home() || is_single()) : ?>
<script type="text/javascript">
	Galleria.loadTheme('<?php bloginfo('template_directory'); ?>/js/galleria.classic.min.js');
    Galleria.run('.galleria');
</script>
<?php endif; ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5394555-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
