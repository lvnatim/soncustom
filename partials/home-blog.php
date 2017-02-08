<?php

$args = array(
  'posts_per_page'   => 5,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$blog_posts_array = get_posts( $args );

?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
  <div id="blog-teaser" class="home-page-section white-background">
    <div class="text-container">
      <h1>Brain Food<small> (Our Blog)</small></h1>
    </div>
    <div class="slider">
      <?php foreach($blog_posts_array as $blog_post): ?>
        <div class="slide">
          <div class="homepage-blog-post-image-container">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($blog_post); ?>"/>
          </div>
          <div class="slider-text-container">
            <b><?php echo $blog_post->post_title ?></b>
            <p><?php echo get_the_date('', $post) ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
</div>
</div>