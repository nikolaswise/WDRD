<?php

/**
* @package Cathy Woodard
* Template name: Projects
*/
get_header();

?>

<div id="main">
  <div class="wrap">

    <div class="layout-aside">
      <?php get_template_part('sidebar'); ?>
    </div>

    <div class="layout-main">
      <?php while(have_posts() ) : the_post(); ?>
        <article class="page paragraph-breaks">
          <header>
            <h3>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h3>
          </header>
          <section>
            <?php the_content() ?>
          </section>
        </article>

      <?php endwhile ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>