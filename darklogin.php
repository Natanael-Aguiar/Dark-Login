<?php

/**
 * Plugin Name:       Dark Login 
 * Plugin URI:        https://github.com/Natanael-Aguiar/Dark-Login
 * Description:       Plugin que implementa um visual dark na tela de login do WordPress.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Natanael Oliveira
 * Author URI:        https://www.facebook.com/Natanaell.Aguiar/
 * License:           GPL
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

defined('ABSPATH') || die('No direct script access allowed!');

// page config
include('config/page-config.php');

// custom login for theme
function custom_login_dark()
{
    echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url(__FILE__) . 'css/style.css" />';
}
add_action('login_head', 'custom_login_dark');

// get url base
function my_custom_login_logo_url()
{
    $urlBase = get_site_url();
    return $urlBase;
}
add_filter('login_headerurl', 'my_custom_login_logo_url');
