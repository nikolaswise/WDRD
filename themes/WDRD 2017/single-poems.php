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
      <div class="page">
        <?php get_template_part('content-poems'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Used for Listing All Posts -->

<?php get_footer(); ?>
