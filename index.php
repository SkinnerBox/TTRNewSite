<?php get_header('zone'); ?>
<!--Treść listy wpisów z bloga-->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Generowanie listy wpisów z bloga-->
	      <?php query_posts( 'posts_per_page=5&paged='.get_query_var('paged') ) ;
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        
	          <!--Element Bootstrap Media-->
	          <div class="media">
	            <!--Pobranie miniaturki wpisu-->
	            <a class="pull-left" href="<?php the_permalink(); ?>">
	              <?php the_post_thumbnail( $size = 'thumbnail'); ?>
	            </a>
	            <!--Pobranie tytułu wpisu-->
	            <div class="media-body">
	              <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <small><time><?php the_date(); ?></time></small></h4>
	              <!--Wyświetlenie krótkiego opisu posta-->
	              <?php the_excerpt(); ?>
	              <!--Przycisk "Czytaj więcej"-->
	              <a href="<?php the_permalink(); ?>" class="btn btn-default">Czytaj więcej</a>
	            </div>
	          </div>
	          <hr>
	
	      <?php endwhile; ?>

		<?php  wpex_pagination(); ?>
	      <?php else: ?>
	      <!-- no posts found -->
	      <?php endif; ?>
			<div class="big-gap"></div>
    	</div>
		<div class="col-md-4" data-spy="affix">
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
<?php get_footer('zone'); ?>
