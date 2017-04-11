<?php
/**
* @package Cathy Woodard
*/
?>

<?php get_header(); ?>

<div class="main">
  <div class="wrap">
    <div class="layout-aside">

      <?php if(in_category('poem')) {?>
        <?php get_template_part('sidebar', 'poems'); ?>
      <?php } elseif(in_category('news')) {?>
        <?php get_template_part('sidebar', 'news'); ?>
      <?php } ?>

    </div>
    <div class="layout-main">
      <div class="page">
        <?php get_template_part('content'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Used for Listing All Posts -->

<?php get_footer(); ?>
