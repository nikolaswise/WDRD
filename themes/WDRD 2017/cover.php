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
      <?php
        $orderText = get_field( "order_link_text" );
        $orderURL = get_field( "order_link_url" );
        if ($orderText && $orderURL):
      ?>
        <a href="<?php echo $orderURL; ?>" class="panel-link">
          <h4><?php echo $orderText; ?></h4>
        </a>
      <?php endif; ?>
      <?php
        $presserText = get_field( "press_release_text" );
        $presserURL = get_field( "press_release_url" );
        if ($presserText && $presserURL):
      ?>
        <a href="<?php echo $presserURL; ?>" class="panel-link">
          <h4><?php echo $presserText; ?></h4>
        </a>
      <?php endif; ?>
    </div>

    <div class="layout-main">
      <?php while(have_posts() ) : the_post(); ?>
        <div class="page">
          <img class="img-float-left" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
          <?php the_content() ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

