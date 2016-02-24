<?php 
/**
 * Template name: Strona z bocznym menu
 *
 */
?>


<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
					the_content(); // displays whatever you wrote in the wordpress editor
					endwhile; endif; //ends the loop
				?>
			</div>
		
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	          <div class="sidebar-module sidebar-module-inset">
	            <ul>
				<?php if(!$post -> post_parent){
						$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo = 0");
					}
					else{
						if($post -> ancestors){
							$ancestors = end($post->ancestors);
							$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo = 0");
						}
					}
					if ($children) {
					?>
					<ul><?php echo $children; ?></ul>
				<?php } ?>
				</ul>
	          </div>
	        </div><!-- /.blog-sidebar -->
        	
		</div><!-- /row -->
	</div><!-- /container -->
<?php get_footer(); ?>