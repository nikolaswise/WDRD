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
	  <h3><a href="mailto:lonegoose1@comcast.net">Preorder</a> at lone goose press.</h3>
      <h3><a href="http://catherinewoodard.com/wp-content/uploads/2017/02/Opening-press-release.docx.zip" target="_blank">Download</a> the press release.</h3>

    </div>
    <div class="layout-main">
      <?php while(have_posts() ) : the_post(); ?>
        <div class="page">
          <?php if(catch_that_image()): ?>
            <img src="<?php echo catch_that_image();?>" />
          <?php endif; ?>
          <?php
            $content = get_the_content('Read more');
            $content = preg_replace('/<img[^>]+./','', $content, 1); // Remove first image of Post
            $content = apply_filters('the_content', $content);
            echo $content;
          ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

