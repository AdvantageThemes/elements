<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Elements
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( has_nav_menu( 'top' ) ) : ?>
		<nav id="top-navigation" class="navigation-top" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => '', 'depth' => '1', 'fallback_cb' => 'false' ) ); ?>
		</nav><!-- #top-navigation .navigation-top-->
<?php endif; ?>

<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">

			<?php if ( get_header_image() ) : ?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				</div>
			<?php endif; // End Header Image check. ?>

			<?php if ( ! get_header_image() ) : ?>
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			<?php endif; // End Site Title and Site Description check. ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'elements' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'elements' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'depth' => '6' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<?php if ( is_active_sidebar( 'below-header' ) ) : ?>
		<section id="below-header" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'below-header' ); ?>
		</section><!-- #below-header .widget-area -->
		<?php endif; // is active - show below-header widget area ?>
	<div id="content" class="site-content">

