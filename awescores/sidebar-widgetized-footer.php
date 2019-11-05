<?php
/**
 * The Widgetized Footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Awescores
 */

if ( ! is_active_sidebar( 'widgetized-footer' ) ) {
	return;
}
?>

<aside id="widgetized-footer" class="widget-area">
	<?php dynamic_sidebar( 'widgetized-footer' ); ?>
</aside><!-- #secondary -->
