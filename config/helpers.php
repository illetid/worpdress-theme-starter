<?php 
/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 *
 * @package iem
 */

if (!function_exists('dd')) :
	function dd()
	{
		echo '<pre>';
	    array_map( function( $x ) { var_dump( $x ); }, func_get_args() );
	    echo '</pre>';
	    die;
	}
endif;


if (!function_exists('iem_top_bar')) {
    function iem_top_bar()
    {
        wp_nav_menu(array(
            'container' => false,
            'menu_class' => 'dropdown menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
            'theme_location' => 'primary',
            'depth' => 3,
            'fallback_cb' => false,
            'walker' => new \iem\core\walkernav(),
        ));
    }
}
/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if (!function_exists('iem_mobile_nav')) {
    function iem_mobile_nav()
    {
        wp_nav_menu(array(
            'container' => false,                         // Remove nav container
            'menu' => __('mobile-nav', 'iem'),
            'menu_class' => 'mobile-menu vertical menu',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="%1$s" class="%2$s" data-drilldown>%3$s</ul>',
            'fallback_cb' => false,
            'walker' => new \iem\core\walkernavMobile(),
        ));
    }
}


