<?php
/**
 * The Header Widgets (or Header Bar) widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Awescores
 */

if ( ! is_active_sidebar( 'header-widgets' ) ) {
	return;
}
?>

<aside id="header-widgets" class="widget-area">
	<?php dynamic_sidebar( 'header-widgets' ); ?>
</aside><!-- #header-widgets -->
