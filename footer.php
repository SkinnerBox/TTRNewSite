    <!-- Footer -->
        
	<footer>
	
	<br class="clear"/><br class="clear"/>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-md-offset-5 col-sm-1 col-sm-offset-5  col-xs-1 col-xs-offset-5 ">
			<a class="footer-links" href="https://www.facebook.com/Tr%C3%B3jmiejski-Turniej-Robot%C3%B3w-173363256042125/?fref=ts" target="_blank">
			    <i style="font-size:300%;" class="fa fa-facebook"></i>
			</a>
		</div>
	
		<div class="col-md-1 col-sm-1  col-xs-1 ">
			<a class="footer-links" href="https://www.youtube.com/channel/UCFR63MSWGn8ymyl7Fa-1Xz" target="_blank">
			     <i style="font-size:300%;" class="fa fa-youtube"></i>
			</a>
		</div>
		</div> <!-- Zakończenie wiersza -->
	</div>
	<br class="clear"/><br class="clear"/>
	 <?php /* Primary navigation */ 
					wp_nav_menu( array(
						'menu' => 'lower-menu',
						'depth' => 0,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse footer-links',
						'container_id'      => 'navbar',
					        //'menu_class' 		=> 'nav navbar-nav navbar-default',
						//Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker()
						)
					);
				?>
				
	<div class="container">
       <div class="row"> 
       <div class="col-md-12 col-sm-12 col-xs-12">
			<!-- copyright -->
			<p>Copyright &copy; Bartosz Soczyński &amp; Maciej Latt 2016</p>
			<!-- /copyright -->
        </div>
        </div> <!-- Zakończenie wiersza -->
        </div>
	<!-- /.container -->
	
	
	
	<br class="clear"/>
	</footer>	
    <?php wp_footer(); ?>
    </body>
</html>
