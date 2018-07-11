<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
      <?php
      /**
      * Cierro el div principal en algunas url de woocommerce
      */
        $url_actual = home_url( add_query_arg( array() ) );
        if (strpos($url_actual, '/shop/') || strpos($url_actual, '/product-category/') || strpos($url_actual, '/product/') ){
          echo '</div>';
        }        
      ?>
    
    <!--</div>--><!-- .col-full -->
  </div><!-- #content -->

  <?php do_action( 'storefront_before_footer' ); ?>

  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <section class="col-md-3 footer-section">
          <p class="footer-section__title">CERTIFICACIÓN</p>
          <p>Asociación Euro Americana de Profesionales en Ciencias Humanas y Sociales</p>
          <p>Red Latinoamericana de PNL</p>
        </section>
        <div class="col-md-3 footer-section">
          <p class="footer-section__title">DIRECTOR</p>
          <p><img src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-bizai-blanco.png'; ?>" alt="logo-bizai-blanco" class=""></p>
        </div>
        <div class="col-md-3 footer-section">
          <p class="footer-section__title">DATOS DE CONTACTO</p>
          <p class="footer-section__description-item">
            <?php the_field('contact_phone', 'option'); ?>
          </p>
          <p class="footer-section__description-item">
            <a class="footer-section__description-item__link" href="mailto:<?php the_field('contact_email', 'option'); ?>">
              <?php the_field('contact_email', 'option'); ?>
            </a>
          </p>
          <p class="footer-section__description-item">
            <a class="footer-section__description-item__link" href="<?php the_field('contact_site', 'option'); ?>" target="_blank">
              <?php the_field('contact_site', 'option'); ?>
            </a>
          </p>
          <p class="footer-section__description-item">
            <?php $mapLocation = get_field('contact_address', 'option'); ?>
            <?php echo $mapLocation['address']; ?>
          </p>
        </div>
        <div class="col-md-3 footer-section">
          <p class="footer-section__title">SEGUINOS EN LAS REDES</p>
          <p class="footer-section__redes-sociales">
            <a class="footer-section__redes-sociales__link" target="_blank" href="<?php the_field('contact_facebook', 'option'); ?>">
              <i class="fa fa-facebook-f fa-2x"></i>
            </a>
            <a class="footer-section__redes-sociales__link" target="_blank" href="<?php the_field('contact_instagram', 'option'); ?>">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
            <a class="footer-section__redes-sociales__link" target="_blank" href="<?php the_field('contact_linkedin', 'option'); ?>">
              <i class="fa fa-linkedin fa-2x"></i>
            </a>
            <a class="footer-section__redes-sociales__link" target="_blank" href="<?php the_field('contact_twitter', 'option'); ?>">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a class="footer-section__redes-sociales__link" target="_blank" href="<?php the_field('contact_youtube', 'option'); ?>">
              <i class="fa fa-youtube fa-2x"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
