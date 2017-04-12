<?php
/**
* @package Cathy Woodard
* Template name: Cover
*/
get_header();
?>

<div id="main">
  <div class="wrap">
    <div class="layout-aside">

      <img src="http://vagrantpress.dev/wp-content/uploads/2017/02/cover-198x300.png" class="fill attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">

  	  <h4><a href="mailto:lonegoose1@comcast.net">Preorder</a> at lone goose press.</h4>
      <h4><a href="http://catherinewoodard.com/wp-content/uploads/2017/02/Opening-press-release.docx.zip" target="_blank">Download</a> the press release.</h4>

    </div>

    <div class="layout-main">
      <?php while(have_posts() ) : the_post(); ?>
        <div class="page">
          <?php the_content() ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

