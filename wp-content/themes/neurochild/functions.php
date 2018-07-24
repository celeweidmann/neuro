<?php
namespace CL\Neuro\Functions;

$file = 'lib/class-wp-bootstrap-navwalker.php'; // Bootstrap Navigation
if (!$filepath = locate_template($file)) {
  trigger_error(sprintf(__('Error locating %s for inclusion', 'colibre'), $file), E_USER_ERROR);
}
require_once $filepath;

function setup() {
  register_nav_menus( array(
    'colibre_superior_right' => __( 'Menú Superior Derecha', 'THEMENAME' ),
    'colibre_footer' => __( 'Menú Footer', 'THEMENAME' )
  ) );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');


/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('colibre/css', get_stylesheet_directory_uri() . '/dist/styles/main.css', false, null);
  
  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('colibre/mainjs', get_stylesheet_directory_uri() . '/dist/scripts/main.js', ['jquery'], null, true);
  wp_enqueue_script('colibre/navbarjs', get_stylesheet_directory_uri() . '/dist/scripts/navbar.js', ['jquery'], null, true);
  
  if( is_front_page() ) {
    wp_enqueue_script('colibre/homejs', get_stylesheet_directory_uri() . '/dist/scripts/home.js', ['jquery','colibre/mainjs'], null, true);
  }

  if ( is_page_template('templates/template-contacto.php') ) {
    wp_enqueue_script('pcfe-google-places-api', '//maps.googleapis.com/maps/api/js?key=AIzaSyDbBHrXqugUnCsYa571LGm7oxnTQrade74'. '&libraries=places', NULL, '1.0', TRUE);
    wp_enqueue_script('googleMap/js', get_stylesheet_directory_uri() . '/dist/scripts/googleMap.js', ['jquery', 'pcfe-google-places-api'], null, true);
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

add_filter( 'sensei_load_default_supported_theme_wrappers', '__return_false' );

/**
 * Registro de Map key
 */
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDbBHrXqugUnCsYa571LGm7oxnTQrade74';
  return $api;
}
add_filter('acf/fields/google_map/api', __NAMESPACE__ . '\\my_acf_google_map_api');

/**
 * Menú de Configuraciones Generales
 */
add_action('acf/init', __NAMESPACE__ . '\\colibre_acf_init');
function colibre_acf_init() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title' 	=> 'Configuraciones Generales',
      'menu_title'	=> 'Configuración',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'update_button'		=> __('Update', 'acf'),
      'updated_message'	=> __("Options Updated", 'acf'),
      'redirect'		=> false
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Datos de la página de inicio',
      'menu_title'	=> 'Página Inicio',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Datos de la página de institucional',
      'menu_title'	=> 'Página Institucional',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Datos de Contacto',
      'menu_title'	=> 'Página Contacto',
      'parent_slug'	=> 'theme-general-settings',
    ));
  }
}

//Elimino el mensje de Actualizaciones disponibles para usuarios que no son Admin
add_action('admin_head', function() {
  if(!current_user_can('manage_options')){
      remove_action( 'admin_notices', 'update_nag',      3  );
      remove_action( 'admin_notices', 'maintenance_nag', 10 );
  }
});