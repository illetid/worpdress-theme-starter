<?php
/**
 * ACF PRO
 *
 * @link https://github.com/elliotcondon/acf
 *
 * @package iem
 */

namespace iem\plugins;

class acf
{
    /*
        Contrusct class to activate actions and hooks as soon as the class is initialized
    */
    public function __construct()
    {
        add_filter('acf/settings/save_json', array($this, 'ritual_acf_json_save_point'));
        add_filter('acf/settings/load_json', array($this, 'ritual_acf_json_load_point'));
        $this->addOptionsPage();
    }

    public function ritual_acf_json_save_point($path)
    {
        // update path
        $path = get_stylesheet_directory() . '/acf-json';

        // return
        return $path;
    }

    public function ritual_acf_json_load_point($paths)
    {
        // remove original path (optional)
        unset($paths[0]);

        // append path
        $paths[] = get_stylesheet_directory() . '/acf-json';

        // return
        return $paths;
    }

    public function addOptionsPage()
    {
        if (function_exists('acf_add_options_page')) {

            acf_add_options_page(array(
                'page_title' => 'Theme General Settings',
                'menu_title' => 'Theme settings',
                'menu_slug' => 'theme-general-settings',
                'capability' => 'edit_posts',
                'redirect' => false
            ));

            acf_add_options_sub_page(array(
                'page_title' => 'Theme Header Settings',
                'menu_title' => 'Header',
                'parent_slug' => 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' => 'Theme Footer Settings',
                'menu_title' => 'Footer',
                'parent_slug' => 'theme-general-settings',
            ));

        }
    }
}
