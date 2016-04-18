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
	<div style="text-align:center;padding-top:40px;" class="tc_div_80946" style="width:650px;height:162.50px;border:1px solid #C0C0C0;"><a title="DO TURNIEJU POZOSTAŁO:" href="http://www.tickcounter.com/countdown/1463817600000/europe-berlin/dhms/FFFFFF3B5998000000000000/DO_TURNIEJU_POZOSTA%C5%81O:">DO TURNIEJU POZOSTAŁO:</a><a title="Countdown" href="http://www.tickcounter.com/">Countdown</a></div><script type="text/javascript">(function(){ var s=document.createElement("script");s.src="http://www.tickcounter.com/loader.js";s.async="async";s.onload=function() { tc_widget_loader("tc_div_80946", "Countdown", 650, ["1463817600000", "europe-berlin", "dhms", "FFFFFF3B5998000000000000", "650", "C0C0C01", "DO TURNIEJU POZOSTAŁO:"]);};s.onreadystatechange=s.onload;var head=document.getElementsByTagName("head")[0];head.appendChild(s);}());</script> 
	<br class="clear"/><br class="clear"/><br class="clear"/><br class="clear"/>
	
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
