<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Inicio
 *
 * @package storefront
 */

$cursosDestacados = get_posts(array(
  'posts_per_page'	=> 1,
  'post_type'			=> 'course',
  'orderby' => 'date',
  'order' => 'DESC',
  'meta_query' => array(
    array(
        'key' => '_course_featured',
        'value' => 'featured',
        'compare' => '=',
    )
  )
));

$cursos = get_posts(array(
  'posts_per_page'	=> 3,
  'post_type'			=> 'course',
  'orderby' => 'date',
  'order' => 'DESC'
));

get_header(); ?>

<?php # Curso Destacado; ?>
<?php $cursoDestacado = (sizeof($cursosDestacados) >= 1) ? $cursosDestacados[0] : $cursos[0]; ?>
<section class="row home__featured" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/dist/images/bg-home-block1.png'; ?>);">
  <div class="col-md-6 text-right">
    <h1><?php echo $cursoDestacado->post_title; ?></h1>
  </div>
  <div class="col-md-6">
    <div><?php echo wp_trim_words(get_the_excerpt($cursoDestacado->ID), 20); ?></div>
    <div><a href="<?php echo get_the_permalink($cursoDestacado->ID); ?>" class="btn">Ver curso</a></div>
  </div>
</section>

<?php # Institucional; ?>
<section class="row home__institucional">
  <div class="col-md-6 text-right">
    <div><?php the_field('inicio_institucional_text'); ?></div>
    <div><a href="<?php echo esc_url( get_field('inicio_institucional_link') ); ?>" class="btn">Conocenos</a></div>
  </div>
  <div class="col-md-6">
    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo">
  </div>
</section>

<?php # Lista de Cursos; ?>
<?php if( $cursos ): ?>
  <section class="row home__courses">
    <?php foreach( $cursos as $curso ):?>
      <div class="col-sm-6 col-md-4">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($curso->ID, 'thumbnail'); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo get_the_title($curso->ID); ?></h5>
            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt($curso->ID), 20); ?></p>
            <div class="text-center"><a href="<?php echo get_the_permalink($curso->ID); ?>" class="btn btn-primary">Ver curso</a></div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php
get_footer();
