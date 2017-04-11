<?php

/**
* @package Cathy Woodard
* Template name: Projects
*/
get_header();

?>

<div id="main">
  <div class="wrap">
    <div class="layout-main">
      <div class="page">
        <div class="row">
          <?php $i = 0; ?>
          <?php while(have_posts() ) : the_post(); ?>
            <div class="publication">
              <?php
                $post_object = get_field('linked_poem');
                if( $post_object ):
                  $post = $post_object;
                  setup_postdata( $post );
              ?>
                <a href="<?php the_permalink(); ?>">
                  <?php wp_reset_postdata(); ?>
                  <?php the_post_thumbnail() ?>
                </a>
                <?php else: ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php wp_reset_postdata(); ?>
                    <?php the_post_thumbnail() ?>
                  </a>
                <?php endif; ?>
            </div>
            <?php $i++ ?>

            <?php if ($i == 3): ?>
              </div>
              <div class="row">
              <?php $i = 0; ?>
            <?php endif; ?>
          <?php endwhile ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>