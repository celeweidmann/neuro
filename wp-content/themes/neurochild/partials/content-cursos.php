<?php
$cursos = get_posts(array(
  'posts_per_page' => 3,
  'post_type' => 'course',
  'orderby' => 'date',
  'order' => 'DESC'
));
// $cursos[] = $cursos[0];
$colClases = '';
$colOffset = '';
switch ( sizeof($cursos) ) {
  case 1:
    $colClases = 'col-sm-12 col-md-12';
    break;
  case 2:
    $colClases = 'col-sm-6 col-md-4';
    $colOffset = ' offset-md-2';
    break;
  default:
    $colClases = 'col-sm-6 col-md-4';
    break;
}
?>
<?php if( $cursos ): ?>
  <section class="row home-scroll home__courses">
    <div class="card-deck">
      <?php $i = 0; ?>
      <?php foreach( $cursos as $curso ):?>
        <!-- <div class="<?php echo $colClases; ?><?php echo $i == 0 ? $colOffset : ''; ?>"> -->
          <div class="card home__courses__course">
            <img class="card-img-top home__courses__course__image" src="<?php echo get_the_post_thumbnail_url($curso->ID, 'thumbnail'); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo get_the_title($curso->ID); ?></h5>
              <p class="card-text"><?php echo wp_trim_words(get_the_excerpt($curso->ID), 10); ?></p>
            </div>
            <div class="card-footer">
              <div class="text-center"><a href="<?php echo get_the_permalink($curso->ID); ?>" class="btn btn-primary">Ver curso</a></div>
            </div>
          </div>
        <!-- </div> -->
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>