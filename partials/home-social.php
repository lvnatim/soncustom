<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
  <div class="home-page-section">
    <div class="text-container">
      <p class="title">Follow Us</p>
    </div>
    <div class="slider">
      <div class="slide">
        <a class="button">
          <img class="img-responsive icon" src="<?php echo get_template_directory_uri() . '/dist/icons/facebook.svg' ?>"/>
        </a>
        <?php echo do_shortcode('[fts_facebook type=page id=pivotandpilot posts=1 posts_displayed=page_only]'); ?>
      </div>
      <div class="slide">
        <a class="button">
          <img class="img-responsive icon" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>"/>
        </a>
        <?php echo do_shortcode('[fts_twitter twitter_name=pivotandpilot tweets_count=1 cover_photo=no stats_bar=no show_retweets=no show_replies=no]'); ?>
      </div>
      <div class="slide">
        <a class="button">
          <img class="img-responsive icon" src="<?php echo get_template_directory_uri() . '/dist/icons/instagram.svg' ?>"/>
        </a>
        <?php echo do_shortcode('[instagram-feed cols=3]'); ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>