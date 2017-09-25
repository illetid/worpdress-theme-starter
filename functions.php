<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `config/custom/custom.php` to write your custom functions
 *
 * @package iem
 */

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) :
    require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

if (class_exists('iem\\init')) :
    new \iem\init();
endif;

function setup_theme()
{
    // Filters the oEmbed process to run the responsive_embed() function
    add_filter('embed_oembed_html', 'responsive_embed', 10, 3);
}

add_action('after_setup_theme', 'setup_theme');

function responsive_embed($html, $url, $attr)
{
    return $html !== '' ? '<div class="embed-wrapper"> <div class="embed-container">' . $html . '</div></div>' : '';
}