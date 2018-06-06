<?php
/**
 * Template Name: Institucional
 */

get_header();
?>

<main id="main" class="institucional" role="main">
  <?php 
  if( have_rows('institucional_items') ):
    $titles = array();
    $abstracts = array();
    $bodies = array();
    $items = array();

    while( have_rows('institucional_items') ): 
      the_row();
      $item = array();
      $item['title'] = get_sub_field('institucional_item_title');
      $item['abstract'] = get_sub_field('institucional_item_abstract');
      $item['body'] = get_sub_field('institucional_item_body');
      array_push($items, $item);
    endwhile;
  ?>
    <div class="row">

      <?php # Left panel ?>
      <div class="col-6">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <?php foreach ($items as $key=>$item): ?>
            <a class="nav-link <?php echo $key===0 ? 'active' : ''; ?>" id="v-pills-<?php echo $key; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $key; ?>" role="tab" aria-controls="v-pills-<?php echo $key; ?>" aria-selected="true">
              <?php echo $item['title']; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <?php # Right panel ?>
      <div class="col-6">
        <div class="tab-content" id="v-pills-tabContent">
          <?php foreach ($items as $key=>$item): ?>
            <div class="tab-pane fade  <?php echo $key===0 ? 'show active' : ''; ?>" id="v-pills-<?php echo $key; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $key; ?>-tab">
              
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-abstract-<?php echo $key; ?>" role="tabpanel" aria-labelledby="pills-abstract-<?php echo $key; ?>-tab">
                  <?php echo $item['abstract']; ?>
                </div>
                <div class="tab-pane fade" id="pills-body-<?php echo $key; ?>" role="tabpanel" aria-labelledby="pills-body-<?php echo $key; ?>-tab">
                  <?php echo $item['body']; ?>
                </div>
              </div>
              
              <ul class="nav nav-pills mb-3" id="pills-tab-<?php echo $key; ?>" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-abstract-<?php echo $key; ?>-tab" data-toggle="pill" href="#pills-abstract-<?php echo $key; ?>" role="tab" aria-controls="pills-abstract-<?php echo $key; ?>" aria-selected="true">
                    resumen
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-body-<?php echo $key; ?>-tab" data-toggle="pill" href="#pills-body-<?php echo $key; ?>" role="tab" aria-controls="pills-body-<?php echo $key; ?>" aria-selected="false">
                    contenido completo
                  </a>
                </li>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();