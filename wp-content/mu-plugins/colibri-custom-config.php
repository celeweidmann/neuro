<?php
/*
Plugin Name: Colectivo Libre Custom Config
Plugin URI: https://colectivolibre.com.ar
Description: Plugin for manage the custom configuration.
Version: 0.1
Author: Colectivo Libre
Author URI: https://colectivolibre.com.ar
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html
*/

/**
 * Cambia el nombre Sensei del menú en la administración.
 */
function colibre_change_sensei_label() {
  global $menu;
  global $submenu;
  foreach ($menu as $key => $value) {
    if($menu[$key][0] === 'Sensei') {
      $menu[$key][0] = 'Académica';
    }
  }
}
add_action( 'admin_menu', 'colibre_change_sensei_label', 11 );

/**
 * Cambiar la url en la pantalla de login
 */
function colibre_header_url() {
  return esc_url(site_url( '/'));
}
add_filter('login_headerurl', 'colibre_header_url');

/**
 * Cargar css en la pantalla de login
 */
function colibre_login_css() {
  wp_enqueue_style( 'colibre_main_styles', get_stylesheet_directory_uri() . '/style_login.css');
}
add_action('login_enqueue_scripts', 'colibre_login_css');

/**
 * Cambiar titulo en la pantalla de login
 */
function colibre_login_title() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'colibre_login_title');