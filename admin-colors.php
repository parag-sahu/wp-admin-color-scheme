<?php 
/*
Plugin Name: Admin color palettes
Plugin URI: //github.com/parag-sahu/wp-admin-color-scheme
Description: This is a plugin to add color schemes for the wordpress admin panel.
Version: 0.1.0
Author: Parag Sahu
Author URI: //github.com/parag-sahu/
*/

function ps_add_color_schemes(){
    $dir = plugin_dir_url(__FILE__);
    wp_admin_css_color( 'bandw', 'Black & white', $dir.'css/bandw.css', array('#bbbbbb','#999999','#555555','#222222'));
}

add_action( 'admin_init', 'ps_add_color_schemes' );