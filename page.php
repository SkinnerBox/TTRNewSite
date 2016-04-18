<?php 
/**
 * Template name: Pojedyncza strona
 *
 */
?>


<?php get_header(); ?>
<?php if (get_the_title($post_id)!='')  echo '<div style="text-align:center;padding-top:140px;" class="tc_div_80946" style="width:650px;height:162.50px;border:1px solid #C0C0C0;"><a title="DO TURNIEJU POZOSTAŁO:" href="http://www.tickcounter.com/countdown/1463817600000/europe-berlin/dhms/FFFFFF3B5998000000000000/DO_TURNIEJU_POZOSTA%C5%81O:">DO TURNIEJU POZOSTAŁO:</a><a title="Countdown" href="http://www.tickcounter.com/">Countdown</a></div><script type="text/javascript">(function(){ var s=document.createElement("script");s.src="http://www.tickcounter.com/loader.js";s.async="async";s.onload=function() { tc_widget_loader("tc_div_80946", "Countdown", 650, ["1463817600000", "europe-berlin", "dhms", "FFFFFF3B5998000000000000", "650", "C0C0C01", "DO TURNIEJU POZOSTAŁO:"]);};s.onreadystatechange=s.onload;var head=document.getElementsByTagName("head")[0];head.appendChild(s);}());</script> '; ?> 

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
					the_content(); // displays whatever you wrote in the wordpress editor
					endwhile; endif; //ends the loop
				?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
<?php get_footer(); ?>