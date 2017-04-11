<?php
/**
* @package Cathy Woodard
* Template name: Single Post
*/
?>

<?php get_header(); ?>
<div id="main">
  <div class="wrap">
    <h1>`single.php`</h1>
    <div class="layout-aside fixedElement">
      <?php get_template_part('sidebar', 'news'); ?>
    </div>
    <div class="layout-main">
      <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        query_posts('category_name=news&paged='.$paged.'&posts_per_page=3');
        while(have_posts() ) : the_post();
      ?>
      <div class="page">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
      <?php endwhile ?>
      <?php posts_nav_link(); ?>
    </div>
  </div>
</div>