<?php get_header(); ?>
	
	<div id="page">
	
		<div class="container">
			
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div id="content">
				<h2>Yikes! That page doesn't exist!</h2>
				
                <p>We're sorry, but the page you're looking for has either changed or doesn't exist.

				<p>There are plenty of things to explore around the site, try your search again below.</p>
                
				<div class="search">
					<?php get_search_form(); ?>
				</div>
                
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>