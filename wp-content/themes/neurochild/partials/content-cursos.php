<?php
$cursos = get_posts(array(
  'posts_per_page' => 3,
  'post_type' => 'course',
  'orderby' => 'date',
  'order' => 'DESC'
));
?>
<?php if( $cursos ): ?>
  <section class="row home-scroll home__courses">
    <div class="card-deck home__courses__card-deck">
      <?php foreach( $cursos as $curso ):?>
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
      <?php endforeach; ?>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>