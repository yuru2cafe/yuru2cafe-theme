<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuru2Cafe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Foundation Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css-found/foundation.css" />
<!-- Foundation Javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js-found/vendor/modernizr.js"></script>

<?php wp_head(); ?>

<!--  Original Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-original.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-customize.css" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'slip contents', 'yuru2cafe' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

    <div class="row">
		<!-- Foundation Header --> 
      <div class="medium-12 columns">
      <!-- Foundation Grid 12 Units  -->
      
		<div class="site-branding">
			<?php if ( is_front_page() ) : ?>
      <!-- && is_home() is out from Underscores themes -->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

      </div><!-- .medium-12 columns -->
      <!-- Foundation Grid 12 Units  -->
    </div><!-- .row -->
    <!-- Foundation Header -->

	</header><!-- #masthead -->

 <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap"><!-- off-canvas start -->

    <!-- Off Canvas Menu -->
    <aside class="left-off-canvas-menu">      
        <!-- whatever you want goes here -->       
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </aside>
    
    <!-- main content goes here -->
	<div id="gloval-navigation">

    <div class="row gloval-navigation">
		<!-- Foundation Header --> 
      <div class="large-12 columns">
      <!-- Foundation Grid 12 Units  -->

	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div id="left-off-canvas-toggle"><a class="left-off-canvas-toggle" href="#" >Menu</a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

      </div><!-- .large-12 columns -->
      <!-- Foundation Grid 12 Units  -->
    </div><!-- .row -->
    <!-- Foundation Header -->

	</div><!-- #gloval-navigation -->
	<div id="content" class="site-content">

	<div id="content-row" class="row">
	<!-- Foundation Content -->






