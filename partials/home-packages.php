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
      <div class="vertical-top">
      </div>
      <div class="packages-slider-wrapper">
        <div class="packages-slider" id="packages-container">
          <?php foreach($posts_array as $post):?>
          <div class="package">
            <p class="package-number <?php /* echo $post_counter == 1 ? 'active' : '' */?>"><?php echo $post_counter; ?></p>
            <h3 class="package-title"><?php echo $post->post_title; ?></h3>
            <h1 class="package-tagline"><?php echo $post->post_excerpt; ?></h1>
            <p class="package-description"><?php echo $post->post_content; ?></p>
          <?php $post_counter += 1 ?>
          </div>
          <?php endforeach ?>
        </div>
        <button class="our-packages-button">Our Packages.</button>
      </div>
      <div class="vertical-bottom">
      </div>
    </div>
  </div>
</div>











