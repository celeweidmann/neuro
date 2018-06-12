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

get_header(); ?>

<section class="row home__featured" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/dist/images/bg-home-block1.png'; ?>);">
  <div class="col-md-6 text-right">
    <h1>Diplomado Internacional en Liderazgo Neuroespiritual</h1>
  </div>
  <div class="col-md-6">
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique libero augue, ut commodo lacus sodales at. Pellentesque scelerisque metus at nisi pellentesque euismod. Donec nisl ante, interdum id libero at, tempus tincidunt lorem. Cras dapibus ante vel elit facilisis, a semper ligula viverra. Donec non libero vel ex luctus volutpat gravida pretium urna. Ut laoreet est id turpis euismod, ut euismod augue luctus.</div>
    <div><button class="btn">Ver curso</button></div>
  </div>
</section>

<section class="row home__institucional">
  <div class="col-md-6 text-right">
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique libero augue, ut commodo lacus sodales at. Pellentesque scelerisque metus at nisi pellentesque euismod. Donec nisl ante, interdum id libero at, tempus tincidunt lorem. Cras dapibus ante vel elit facilisis, a semper ligula viverra. Donec non libero vel ex luctus volutpat gravida pretium urna. Ut laoreet est id turpis euismod, ut euismod augue luctus.</div>
    <div><button class="btn">Conocenos</button></div>
  </div>
  <div class="col-md-6">
    <!-- <img class="mx-auto" src="http://via.placeholder.com/170x150"> -->
    <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/dist/images/logo-neuroespiritual.png'; ?>" alt="logo">
  </div>
</section>

<section class="row home__courses">
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="http://via.placeholder.com/430x380" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Diplomado internacional...</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class="text-center"><a href="#" class="btn btn-primary">Ver curso</a></div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="http://via.placeholder.com/430x380" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Couch de Liderazgo...</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class="text-center"><a href="#" class="btn btn-primary">Ver curso</a></div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="http://via.placeholder.com/430x380" alt="Card image cap">
      <div class="card-body">
        <h5 cl  ass="card-title">Curso de liderazgo...</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class="text-center"><a href="#" class="btn btn-primary">Ver curso</a></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
