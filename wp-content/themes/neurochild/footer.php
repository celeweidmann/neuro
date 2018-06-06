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
  <footer class="footer" role="contentinfo">
    <div class="footer__cv-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- <img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo-neuroespiritual-footer" class=""> -->
            <img src="http://via.placeholder.com/350x430">
          </div>
          
          <div class="col-md-8">
            <div class="row">
            <div class="col-md-4">
                <img class="mx-auto" src="http://via.placeholder.com/120x120">
              </div>
              <div class="col-md-8">
                <h3>Certificado Internacional</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique libero augue, ut commodo lacus sodales at.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <img class="mx-auto" src="http://via.placeholder.com/170x150">
              </div>
              <div class="col-md-6">
                <img class="mx-auto" src="http://via.placeholder.com/170x150">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__redes-sociales-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-facebook-f fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
            <i class="fa fa-youtube fa-2x"></i>
          </div>
          <div class="col-md-6 text-right">
            diseño y desarrollo <strong><a href="http://www.colectivolibre.com.ar" target="_blank">Colectivo Libre</a></strong>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->
  
  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
