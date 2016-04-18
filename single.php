<!-- Templatka wyglądu pojedyczego wpisu na blogu-->

<!--Pobranie nagłówka-->
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
     
     
     
      <!--Pobranie treści pojedynczego wpisu-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
	
	
	<div class="col-md-3 col-md-push-9 col-sm-24 col-xs-24">      
		<div class="powrot">
			<a class="btn btn-default" href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">Powrót</a>
		</div>
	
	</div>
	
	
        <div class="col-md-9 col-md-pull-3 col-sm-24 col-xs-24">
          <!--Wyświetlenie tytułu oraz autora pojedynczego wpisu-->
          <h2><?php the_title(); ?> <small><?php the_author(); ?></small></h2>
          <!--Wyświetlenie daty dodania wpisu-->
          <h4><time><?php the_date(); ?></time></h4>
        </div>
	
	
      
      
      
      
      
        
        <div class="col-md-12">
          <!--Wyświetlenie miniaturki wpisu-->
          <?php echo get_the_post_thumbnail( $page->ID, 'medium', array( 'class' => 'center-block img-responsive' ) ); ?>
          <!--Wyświetlenie treści pojedynczego wpisu-->
          <?php the_content(); ?>

		<a class="btn btn-default" href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">Powrót</a>
        </div>
      
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
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

<!--Pobranie stopki-->
<?php get_footer(); ?>
