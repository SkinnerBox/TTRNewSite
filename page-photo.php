<?php 
/**
 * Template name: Strona ze zdjęciem i bocznym menu
 *
 */
?>


<?php get_header(); ?>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
	<div class="container">
		<!--  <img class="img-responsive img-left" src="http://placehold.it/200x200&text=Logo" alt=""> -->
       			<p class="title"><?php echo $wp_query->post->post_title; ?></p>
        </div>
    </header>
	<div class="container under-photo">
	
	<?php /*
	<div class="row"><div class="col-md-12">
	
	<h4>
	<?php if ($post->post_parent) {echo get_the_title($post->post_parent)." &#x21E2; ";} ?>  <?php echo $wp_query->post->post_title; ?>
	</h4> 
	<br class="clear"/>
	</div>
	
	</div>
	*/?>
	
	
	
	
		<div class="row">
		
			<div class="col-md-3 col-md-push-8">
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
