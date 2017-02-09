<?php $args = array(
  'posts_per_page'   => 4,
  'offset'           => 0,
  'category'     => $term_ids,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'packages',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'       => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
);

$posts_array = get_posts( $args ); ?>

<?php $post_counter = 1; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="packages-slider-wrapper">
        <div class="packages-slider" id="packages-container">
          <?php foreach($posts_array as $post):?>
          <div class="package">
            <div class="text-container red">
              <p class="title"><?php echo $post->post_title; ?></p>
              <h1><?php echo $post->post_excerpt; ?></h1>
              <p><?php echo $post->post_content; ?></p>
            </div>
            <p class="package-number <?php /* echo $post_counter == 1 ? 'active' : '' */?>"><?php echo $post_counter; ?></p>
          <?php $post_counter += 1 ?>
          </div>
          <?php endforeach ?>
        </div>
        <a class="button red packages-button">Our Packages.</a>

        <div class="slider-arrows-container">
          <div id="package-left" class="slider-arrow-container">
            <img class="img-responsive left svg" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>
          </div>
          <div id="package-right" class="slider-arrow-container">
            <img class="img-responsive right svg" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow.svg' ?>"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>











