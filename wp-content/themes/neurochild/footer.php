<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

    <!--</div>--><!-- .col-full -->
  </div><!-- #content -->

  <?php do_action( 'storefront_before_footer' ); ?>

  <!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
  <footer class="footer" role="contentinfo">
    <div class="footer__cv-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="cv-card">
              <div class="cv-card__photo">
                <img class="mx-auto d-block rounded-circle" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/foto-jose.png'; ?>" alt="Foto Jose Bizai">
              </div>
              <div class="cv-card__logo">
                <img class="mx-auto d-block" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-jose-bizai.png'; ?>" alt="Logo Jose Bizai">
              </div>
              <div class="cv-card__text text-center">
                <span>Director del Diplomado y docente responsable.</span>
              </div>
              <div class="cv-card__buttons text-center">
                <a class="btn" href="http://">cv</a>
                <a class="btn" href="http://">web</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-8">
            <div class="row footer__certificado">
            <div class="col-md-2">
                <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-certificado.png'; ?>">
              </div>
              <div class="col-md-10">
                <h3>Certificado Internacional</h3>
                <p>Nuestro Diplomado cuenta con la <b>Certificación de Competencia Educacional Profesional en Coaching C.C.E.P.C.</b> de AEAPro con Registro Número AR619.1/18P, bajo normas ISO 9001 y con la certificación de Quality System IQNet.</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-aeapro.png'; ?>">
              </div>
              <div class="col-md-6">
                <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-red-latino.png'; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__redes-sociales-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer__redes-sociales-block__iconos">
            <i class="fa fa-facebook-f fa-2x"></i>
            <i class="fa fa-instagram fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i>
            <i class="fa fa-youtube fa-2x"></i>
          </div>
          <div class="col-md-6 footer__redes-sociales-block__brand">
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
