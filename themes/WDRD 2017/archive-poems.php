<?php

/**
* @package Cathy Woodard
* Template name: Projects
*/
get_header();

?>
<mark>`archive-poems.php`</mark>
<div id="main">
  <div class="wrap">

    <div class="layout-aside">
      <?php get_template_part('sidebar'); ?>
    </div>

    <div class="layout-main">
      <?php
        $args = array(
          'posts_per_page' => 1,
          'post_status' => 'publish',
          'post_type' => 'poems'
        );
        $query = new WP_Query( $args );
        while( $query->have_posts() ) :  $query->the_post();
      ?>
        <article class="page">
          <div class="poemnav left">
            <div class="fixer">
              <a href="<?php echo get_permalink(get_next_post(true)); ?>"><</a>
            </div>
          </div>
          <?php the_post_thumbnail(); ?>
          <header>
            <h3>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h3>
          </header>
          <section>
            <?php the_content() ?>
          </section>
          <div class="poemnav right">
            <div class="fixer">
              <a href="<?php echo get_permalink(get_previous_post(true)); ?>">
                >
              </a>
            </div>
          </div>
        </article>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>