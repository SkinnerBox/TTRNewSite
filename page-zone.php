<?php 
/**
 * Template name: Strona strefy zawodników
 *
 */
?>


<?php get_header('zone'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
					the_content(); // displays whatever you wrote in the wordpress editor
					endwhile; endif; //ends the loop
				?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
<?php get_footer(); ?>