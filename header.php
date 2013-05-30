<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Themeideas
 * @author Neoideas <contacto@neoideas.mx>
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="navbar navbar-inverse navigation-main" role="navigation">
			<div class="navbar-inner">
				<ul class="nav">
					<?php
						$args = array(
							'theme_location'=> 'primary',
							'depth'			=> 3,
							'container'		=> false,
							'menu_class'	=> '',
							'fallback_cb'	=> 'themeideas_small_menu',
							'walker'		=> new Twitter_Bootstrap_Walker_Nav_Menu(),
							'items_wrap'	=> '%3$s'
						);
						wp_nav_menu( $args );
					?>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="row-fluid site-main">
