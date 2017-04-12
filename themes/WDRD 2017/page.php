<?php
/**
* @package Cathy Woodard
*/
get_header();
?>

<div id="main">
  <div class="wrap">
    <div class="layout-aside"></div>
    <div class="layout-main">
      <?php while(have_posts() ) : the_post(); ?>
        <div class="page img-padded-right">
          <?php the_content(); ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

