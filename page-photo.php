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
       
       
       
        <div style="text-align:left;background: url('http://www.wykop.pl/cdn/c3201142/comment_F0wV5KrrXXMZe4KyG0vB6QOQLkVPX3YD.jpg'); height:30%; width:42%;">
       <p style="text-align:left;font-size:450%;color:black;font-family:sans-serif;font-style:normal;">&nbsp; <?php echo $wp_query->post->post_title; ?></p></div>
       
        
	</div>
    </header>
	<div class="container under-photo">
	<div class="row"><div class="col-md-12">
	<h1>
	<?php if ($post->post_parent) {echo get_the_title($post->post_parent)." ->";} ?>  <?php echo $wp_query->post->post_title; ?>
	</h1> 
	<br class="clear"/>
	</div>
	</div>
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