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