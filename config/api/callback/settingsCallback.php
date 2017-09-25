<?php
/**
 * Callbacks for Settings API
 *
 * @package iem
 */

namespace iem\api\callback;

/**
 * Settings API Callbacks Class
 */
class settingsCallback
{
	public static function admin_index() 
	{
		return require_once( get_template_directory() . '/views/admin/index.php' );
	}

	public static function admin_faq() 
	{
		echo '<div class="wrap"><h1>FAQ Page</h1></div>';
	}

	public static function iem_options_group( $input )
	{
		return $input;
	}

	public static function iem_admin_index()
	{
		echo 'Customize this Theme Settings section and add description and instructions';
	}

	public static function first_name()
	{
		$first_name = esc_attr( get_option( 'first_name' ) );
		echo '<input type="text" class="regular-text" name="first_name" value="'.$first_name.'" placeholder="First Name" />';
	}
}