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

  if( is_front_page() ) {
    wp_enqueue_script('colibre/homejs', get_stylesheet_directory_uri() . '/dist/scripts/home.js', ['jquery','colibre/mainjs'], null, true);
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

add_filter( 'sensei_load_default_supported_theme_wrappers', '__return_false' );