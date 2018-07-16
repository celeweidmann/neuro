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

$cursoAux = get_posts(array(
  'posts_per_page'	=> 1,
  'post_type'			=> 'course',
  'orderby' => 'date',
  'order' => 'DESC'
));

get_header(); ?>

<?php # Curso Destacado; ?>
<?php $cursoDestacado = (sizeof($cursosDestacados) >= 1) ? $cursosDestacados[0] : $cursoAux[0]; ?>
<!-- <section class="row home-scroll home__featured" style="background-image: url(<?php //echo get_stylesheet_directory_uri() . '/dist/images/bg-home-block1.png'; ?>);"> -->
<section class="row home-scroll home__featured">
  <div class="col-md-6 text-right d-flex flex-column align-items-center justify-content-center">
    <h1 class="home__featured__title"><?php echo $cursoDestacado->post_title; ?></h1>
  </div>
  <div class="col-md-6 d-flex flex-column justify-content-center home__featured__subtitle-block">
    <div class="home__featured__subtitle"><?php echo wp_trim_words(get_the_excerpt($cursoDestacado->ID), 20); ?></div>
    <div><a href="<?php echo get_the_permalink($cursoDestacado->ID); ?>" class="btn">Ver curso</a></div>
  </div>
</section>

<?php # Institucional; ?>
<section class="row home-scroll home__institucional">
  <div class="col-md-6 text-right d-flex flex-column justify-content-center">
    <div><?php the_field('inicio_institucional_text'); ?></div>
    <div><a href="<?php echo esc_url( get_field('inicio_institucional_link') ); ?>" class="btn">Conocenos</a></div>
  </div>
  <div class="home__institucional__cta col-md-6 d-flex flex-column align-items-center justify-content-center">
    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo">
  </div>
</section>

<?php # Lista de Cursos; ?>
<?php get_template_part('partials/content', 'cursos'); ?>

<?php # Curriculum; ?>
<?php get_template_part('partials/content', 'curriculum'); ?>

<?php
get_footer();
