<?php get_header(); ?>
	
	<!--content-->
	<div id="content">


		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		<h2>Archives by Month:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		
		<h2>Archives by Subject:</h2>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
	
	</div>
	<!--content-->
	
	<div id="right_sidebar">
		<?php get_sidebar(); ?>
	</div>
	
	<div id="footer">
		<?php get_footer(); ?>
	</div>	
	
</body>
</html>