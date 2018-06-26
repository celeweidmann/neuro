<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div>
  <?php do_action( 'storefront_before_header' ); ?>

  <header class="header" role="banner" style="<?php storefront_header_styles(); ?>">
    <!-- Menú Superior -->
    <nav class="header__navbar navbar fixed-top navbar-expand-lg navbar-dark pt-0" role="navigation">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( site_url( '/' ) ); ?>">
          <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo" class="">
        </a>
        <div class="header__menu collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'colibre_superior_right',
                'depth'       => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'     => 'div',
                'container_class' => 'collapse navbar-collapse',
                'menu_class'    => 'navbar__colibre_superior_right navbar-nav nav-custom',
                'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
                'walker'      => new WP_Bootstrap_Navwalker()
              )
            );
          ?>
        </div>
      </div>
    </nav>

    <?php
    /**
     * Functions hooked into storefront_header action
     *
     * @hooked storefront_header_container                 - 0
     * @hooked storefront_skip_links                       - 5
     * @hooked storefront_social_icons                     - 10
     * @hooked storefront_site_branding                    - 20
     * @hooked storefront_secondary_navigation             - 30
     * @hooked storefront_product_search                   - 40
     * @hooked storefront_header_container_close           - 41
     * @hooked storefront_primary_navigation_wrapper       - 42
     * @hooked storefront_primary_navigation               - 50
     * @hooked storefront_header_cart                      - 60
     * @hooked storefront_primary_navigation_wrapper_close - 68
     */
    //do_action( 'storefront_header' ); ?>

  </header><!-- #masthead -->

  <?php
  /**
   * Functions hooked in to storefront_before_content
   *
   * @hooked storefront_header_widget_region - 10
   * @hooked woocommerce_breadcrumb - 10
   */
  //do_action( 'storefront_before_content' ); ?>

  <div id="content" class="site-content" tabindex="-1">

      <?php
      /**
      * Para las url de woocommerce acomodo el div principal
      */
        $url_actual = home_url( add_query_arg( array() ) );
        if (strpos($url_actual, '/shop/') || strpos($url_actual, '/product-category/') || strpos($url_actual, '/product/')){
          echo '<div class="col-full">';
        }        
      ?>

    <?php
    do_action( 'storefront_content_top' );
