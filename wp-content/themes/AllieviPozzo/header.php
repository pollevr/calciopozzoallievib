<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Allievi_Pozzo
 * @since Allievi Pozzo 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="description" content="Sito della squadra ASD Calcio Pozzo di San Giovanni Lupatoto (VR) - Categoria Allievi B - 2013/2014"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js"></script>
	<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/ticker-style.css' type="text/css" media='screen and (min-width: 768px)'/>
	<link rel="Alternate" media="only screen and (max-width:767px)" href="<?php echo get_template_directory_uri(); ?>/css/ticker-style-mobile.css" >
	<script type="text/javascript">
		jQuery(document).ready(function () {
        jQuery('#js-news').ticker({
        	controls: false, 
					titleText: 'News'
        });
    });
	</script>
</head>

<body <?php body_class(); ?>>
	<ul id="js-news" class="js-hidden">
		<?php
			$args = array(
     		'post_type' => 'newsticker',
     		'post_status' => 'publish',
     		'posts_per_page' => -1,
     		'orderby' => 'date',
     		'order' => 'DESC',
      );
      $postslist = get_posts( $args );
      if ( $postslist ) {
      	foreach ( $postslist as $post ) {
					setup_postdata( $post );
      ?>
			    <li class="news-item"><a href="#"><?php the_content(); ?></a></li>
		<?php
				}
			}
			
		?>
	</ul>
	<?php wp_reset_postdata(); ?>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
 				<h1 class="site-title" style="float:left;"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description" style="float:left;"><?php bloginfo( 'description' ); ?></h2>
        <img id="logo_calcio_pozzo_header" src="/wp-content/themes/AllieviPozzo/images/calcio-pozzo.png" alt="Calcio Pozzo Logo" style="padding-top:35px; padding-left:35px;" />  
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
