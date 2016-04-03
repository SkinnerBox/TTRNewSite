<!-- Templatka wyglądu pojedyczego wpisu na blogu-->

<!--Pobranie nagłówka-->
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
     
      <!--Pobranie treści pojedynczego wpisu-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="col-md-12">
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
        </div>
      
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
    </div>
  </div>
</div>

<!--Pobranie stopki-->
<?php get_footer(); ?>