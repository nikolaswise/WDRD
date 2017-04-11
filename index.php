<?php
/**
* @package Cathy Woodard
*/
?>

<?php get_header(); ?>

<div id="main">
  <div class="wrap">
    <div class="layout-aside">
      <?php get_template_part('sidebar'); ?>
    </div>
    <div class="layout-main">
      <?php get_template_part('content'); ?>
    </div>
  </div>
</div>

<!-- Used for Listing All Posts -->

<?php get_footer(); ?>
