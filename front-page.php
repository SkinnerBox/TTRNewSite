<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 */

get_header(); ?>
	<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
		<a href="<?php echo get_site_url();?>/rejestracja/">
		        <!-- Set the first background image using inline CSS below. -->
		        <!-- <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/front/5_SKALP.jpg');"></div> -->
			 <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/T11.jpg');"></div>
		        <div class="carousel-caption">
				<div class="frame">
		            		<h2>Rejestracja otwarta!</h2>
				</div>
		        </div>
		</a>
            </div>
            <div class="item">
		<a href="http://www.youtube.com/watch?v=Ehv0iriLTKE"> 
		        <!-- Set the second background image using inline CSS below. -->
		      <!--  <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div> -->
		       <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/T8.jpg');"></div>
		        <div class="carousel-caption">
				<div class="frame">
					<h2>Caption 2</h2>
				</div>
		        </div>
		</a>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div> -->
                 <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/T1.jpg');"></div>
		<div class="carousel-caption">
			<div class="frame">
				<h2>Caption 3</h2>
			</div>	
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    
    <?php wp_footer(); ?>
    
    </body>
</html>
