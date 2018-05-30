<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

    </div><!-- .col-full -->
  </div><!-- #content -->

  <?php do_action( 'storefront_before_footer' ); ?>

  <!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
  <footer class="footer footer__violet-block" role="contentinfo">
    <div class="container footer__violet-block">
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo-neuroespiritual-footer" class="">
        </div>
        <div class="col-md-3">
          <ul>
            <li><a>INSTITUCIONAL</a></li>
            <li><a>CURSOS</a></li>
            <li><a>CONTACTO</a></li>
          </ul>     
        </div>
        <div class="col-md-3">
          <i class="fa fa-facebook-f fa-2x"></i>
          <i class="fa fa-instagram fa-2x"></i>
          <i class="fa fa-twitter fa-2x"></i>
          <i class="fa fa-youtube fa-2x"></i>
        </div>
        <div class="col-md-3">
          <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-jose-bizai.png'; ?>" alt="logo-jose-bizai-footer" class="">
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->

  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
