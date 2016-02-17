<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	
	<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Nawigacja</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
	        </div>
				<?php /* Primary navigation */
					wp_nav_menu( array(
						'menu' => 'main-menu',
						'depth' => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'navbar',
						'menu_class' => 'nav navbar-nav navbar-right',
						//Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker())
					);
				?>
	          
	          <?php /*<ul class="nav navbar-nav navbar-right">
		         <li><a href="oturnieju.html">O turnieju</a></li>
		         <li><a href="partnerzy.html">Partnerzy</a></li>
		         <li><a href="strefa.html">Strefa zawodników</a></li>
		         <li><a href="kontakt.html">Kontakt</a></li>
	          </ul>*/
	          ?>
	        <!--/.nav-collapse -->
	      </div>
	    </nav>