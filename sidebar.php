<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iem
 */

if ( ! is_active_sidebar( 'iem-sidebar' ) ) :
	return;
endif;
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'iem-sidebar' ); ?>
</aside><!-- #secondary -->
