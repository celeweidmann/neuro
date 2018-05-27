<header class="header">
  <!-- Menú Superior -->
  <nav class="header__navbar navbar fixed-top navbar-expand-lg navbar-dark pt-0" role="navigation">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo" class="">
      </a>
      <div class="header__menu collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'primary_navigation',
              'depth'       => 1, // 1 = with dropdowns, 0 = no dropdowns.
              'container'     => 'div',
              'container_class' => 'collapse navbar-collapse',
              'menu_class'    => 'navbar__primary_navigation navbar-nav nav-custom',
              'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
              'walker'      => new WP_Bootstrap_Navwalker()
            )
          );
        ?>
      </div>
    </div>
</header>
