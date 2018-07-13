<?php
/**
 * Template Name: Contacto
 */

get_header();
?>

<main class="contacto" role="main">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 formulario">
          <?php the_content(); ?>
        </div>
        <div class="col-sm-12 col-md-6">
          <?php $mapLocation = get_field('contact_address', 'option'); ?>
          <p><i class="contacto__address__icon fa fa-map-marker"></i><?php echo $mapLocation['address']; ?></p>
          <p><i class="contacto__phone__icon fa fa-mobile"></i><?php the_field('contact_phone', 'option'); ?></p>
          <p>
            <i class="contacto__email__icon fa fa-envelope-o"></i>
            <a href="mailto:<?php the_field('contact_email', 'option'); ?>">
              <?php the_field('contact_email', 'option'); ?>
            </a>
          </p>
          <div class="acf-map">
            <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
              <?php echo $mapLocation['address']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</main><!-- #main -->

<?php
get_footer();