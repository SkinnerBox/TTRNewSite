<?php 
/**
 * Template name: Strona z bocznym menu
 *
 */
?>


<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-push-8 col-md-offset-1">
				<?php require_once("sidemenu.php"); ?>
	        </div><!-- /.blog-sidebar -->
	        
	        <div class="col-md-8 col-md-pull-3">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
					the_content(); // displays whatever you wrote in the wordpress editor
					endwhile; endif; //ends the loop
				?>
			</div>
        	
		</div><!-- /row -->
	</div><!-- /container -->
<?php get_footer(); ?>