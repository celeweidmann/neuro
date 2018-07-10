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
    <div class="footer__redes-sociales-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer__redes-sociales-block__iconos">
            <a target="_blank" href="<?php the_field('contact_facebook', 'option'); ?>"><i class="fa fa-facebook-f fa-2x"></i></a>
            <a target="_blank" href="<?php the_field('contact_instagram', 'option'); ?>"><i class="fa fa-instagram fa-2x"></i></a>
            <a target="_blank" href="<?php the_field('contact_linkedin', 'option'); ?>"><i class="fa fa-linkedin fa-2x"></i></a>
            <a target="_blank" href="<?php the_field('contact_twitter', 'option'); ?>"><i class="fa fa-twitter fa-2x"></i></a>
            <a target="_blank" href="<?php the_field('contact_youtube', 'option'); ?>"><i class="fa fa-youtube fa-2x"></i></a>
          </div>
          <div class="col-md-6 footer__redes-sociales-block__brand">
            diseño y desarrollo <strong><a href="http://www.colectivolibre.com.ar" target="_blank">Colectivo Libre</a></strong>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
