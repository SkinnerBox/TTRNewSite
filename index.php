<?php get_header('zone'); ?>
<!--Treść listy wpisów z bloga-->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Generowanie listy wpisów z bloga-->
	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        
	          <!--Element Bootstrap Media-->
	          <div class="media">
	            <!--Pobranie miniaturki wpisu-->
	            <a class="pull-left" href="<?php the_permalink(); ?>">
	              <?php the_post_thumbnail( $size = 'thumbnail'); ?>
	            </a>
	            <!--Pobranie tytułu wpisu-->
	            <div class="media-body">
	              <a href="<?php the_permalink(); ?>"><h4 class="media-heading"><?php the_title(); ?></h4></a>
	              <!--Wyświetlenie krótkiego opisu posta-->
	              <?php the_excerpt(); ?>
	              <!--Przycisk "Czytaj więcej"-->
	              <a href="<?php the_permalink(); ?>" class="btn btn-default">Czytaj więcej</a>
	            </div>
	          </div>
	          <hr>
	
	      <?php endwhile; ?>
	      <div class="pagination">
			<?php
			global $wp_query;
	
			$big = 999999999; // need an unlikely integer
	
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
		  </div>
	      <?php else: ?>
	      <!-- no posts found -->
	      <?php endif; ?>
			<div class="big-gap"></div>
    	</div>
		<div class="col-md-4">
			<div id="sidebar">
				<?php if ( is_active_sidebar( 'primary' ) ) : ?>
	
				<?php dynamic_sidebar( 'primary' ); ?>
		
				<?php else : ?>
			
					<div class="widget">
						<h2>Domyślny widget</h2>
						<p>Ten widget będzie się pokazywał gdy żaden inny widget nie zostanie dodany do paska.</p>
					</div> <!-- end widget -->
			
				<?php endif; ?>
			</div> <!-- end sidebar -->
		</div>
  	</div>
</div>
<?php get_footer(); ?>