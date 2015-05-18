<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-128x128.png" sizes="128x128" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

	<div id="wrap" class="page-wrap">
		<div id="header-wrap" class="clr header-wrap">
			<header id="header" class="header site-header clr header-container" role="banner">
				<?php
				// Outputs the site logo
				// See functions/logo.php
				wpex_logo(); ?>

        <div class="quote">
          <p>"If you see it in your mind, you're going to hold it in your hand"<strong> THE LAW OF ATTRACTION</strong></p>
        </div>
				<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
				<div class="header-nav" id="site-navigation-wrap">
					<a href="#sidr-main" id="navigation-toggle"><span class="fa fa-bars"></span><?php echo __( 'Menu', 'wpex' ); ?></a>
					<nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
						<?php
						// Display main menu
						wp_nav_menu( array(
							'theme_location'	=> 'main_menu',
							'sort_column'		=> 'menu_order',
							'menu_class'		=> 'dropdown-menu sf-menu',
							'fallback_cb'		=> false,
							'walker'			=> new WPEX_Dropdown_Walker_Nav_Menu()
						) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #site-navigation-wrap -->
			</header><!-- #header -->
		</div><!-- #header-wrap -->

		<?php
		// Displays the homepage slider based on the slides custom post type
		wpex_homepage_slider(); ?>

		<div id="main" class="main-container">