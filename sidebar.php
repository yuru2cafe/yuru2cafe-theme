<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuru2Cafe
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
   <div class="large-4 medium-4 columns">
   <!-- Foundation Grid 4 units -->
	 		<?php dynamic_sidebar( 'sidebar-1' ); ?>
   </div><!-- .large-4 medium-4 columns -->
   <!-- Foundation Grid 4 units close -->
</div><!-- #secondary -->
