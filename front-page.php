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
                <!-- Set the first background image using inline CSS below. -->
              <!--  <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div> -->
	      <center><img src="<?php echo get_bloginfo('template_url'); ?>/images/TTR1.jpg" width="70%" height="40%" style="margin-top:4%"/></center>
                <div class="carousel-caption">
                   <!-- <h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div> -->
		<center><img src="<?php echo get_bloginfo('template_url'); ?>/images/TTR2.jpg" width="70%" height="40%" style="margin-top:4%"/></center>
                <div class="carousel-caption">
                   <!-- <h2>Caption 2</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div> -->
		<center><img src="<?php echo get_bloginfo('template_url'); ?>/images/TTR3.jpg" width="70%" height="40%" style="margin-top:4%"/></center>
                <div class="carousel-caption">
                   <!--  <h2>Caption 3</h2> -->
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