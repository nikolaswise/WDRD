<?php
/**
* @package Cathy Woodard
* Template name: Publications
*/
?>

<?php get_header(); ?>

<div class="wrap">
  <div id="main">
    <h1>`publications.php`</h1>
    <div class="layout-aside"></div>
    <div class="layout-main">
      <div class="page">
        <div class="row">
          <?php $i = 0; ?><!-- counter for rows -->

          <?php query_posts(array('category_name'=>'publication', 'posts_per_page'=> -1)); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="publication <?php if ($i == 3){ echo 'last-child';} ?>">
              <?php
                $key="publication_link";
                if(get_post_meta($post->ID, $key, true)){?>
                  <a href="<?php echo get_post_meta($post->ID, $key, true); ?>"?><?php echo get_the_post_thumbnail($post->ID, array(160, 240));?></a>
                <?php }
                else {
                  echo get_the_post_thumbnail($post->ID, array(160, 240));
              }?>
             </div>
            <?php $i++ ?>
            <?php if ($i == 3): ?>
              </div>
              <div class="row">
              <?php $i = 0; ?>
            <?php endif; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>