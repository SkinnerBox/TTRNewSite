<?php get_header('zone'); ?>
	<div class="container">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div><!-- /container -->
<?php get_footer(); ?>