<?php
/**
* @package Cathy Woodard
*/
get_header();
?>

<div id="main">
    <div class="wrap">

    <?php if(in_category('poem')) {?>
      <div id="sidenav">
      <div class="fixedElement">
        <h3>Poems</h3>
        <h4>From <em>For Coming Forth By Day</em></h4>
        <ul class="leftnav">
          <?php
            global $wp_query;
            $IDOutsideLoop = $wp_query->post->ID;
            $nav_query = new WP_Query('category_name=coming forth&posts_per_page=-1');
            while( $nav_query->have_posts() ) : $nav_query->the_post();
          ?>
          <li<?php if($IDOutsideLoop == $post->ID) { echo " class=\"current\""; }?>><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile;?>
        </ul>
        <h4>Other Poems</h4>
        <ul>
          <?php
            global $wp_query;
            $IDOutsideLoop = $wp_query->post->ID;
            $other_query = new WP_Query('cat=3&category__not_in=4&posts_per_page=-1');
            while( $other_query->have_posts() ) : $other_query->the_post();
          ?>
          <li<?php if($IDOutsideLoop == $post->ID) { echo " class=\"current\""; }?>><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile;?>
        </ul>
      </div>
      </div>
    <?php } ?>


    <?php if(in_category('project')) {?>
      <div id="sidenav">
      <div class="fixedElement">
        <h3>Projects</h3>
        <ul class="leftnav">
          <?php
            global $wp_query;
            $IDOutsideLoop = $wp_query->post->ID;
            $nav_query = new WP_Query('category_name=project&posts_per_page=-1');
            while( $nav_query->have_posts() ) : $nav_query->the_post();
          ?>
          <li<?php if($IDOutsideLoop == $post->ID) { echo " class=\"current\""; }?>><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile;?>
        </ul>
      </div>
      </div>
    <?php } ?>

    <?php if(in_category('hidden_project')) {?>
      <div id="sidenav">

      </div>
    <?php } ?>


    <?php while(have_posts() ) : the_post(); ?>
      <?php if(in_category('poem')){?>
        <div class="poemnav left">
          <div class="fixer">
            <a href="<?php echo get_permalink(get_next_post(true, '', false)); ?>"><</a>
          </div>
        </div><?php } ?>
        <div class="<?php if(in_category('poem')){echo 'poem';} elseif(in_category('project') || in_category('hidden_project')){echo 'project';} elseif(in_category('news')){echo 'news';}?>">

          <?php if(catch_that_image()):?>
            <img src="<?php echo catch_that_image();?>" />
          <?php endif ?>

          <h3><?php the_title(); ?></h3>

          <?php
            $content = get_the_content('Read more');
            $content = preg_replace('/<img[^>]+./','', $content, 1); // Remove first image of Post
            $content = apply_filters('the_content', $content);
            echo $content;
          ?>
          <!-- publication info -->
          <?php if(get_post_meta($post->ID, 'published_in', true)){ ?>

          <p style="margin-top: 42px;">Published in <em>
          <?php if(get_post_meta($post->id, 'published_in_link', true)){ ?>
            <a href="<?php echo get_post_meta($post->id, 'published_in_link', true); ?> ">
          <?php } ?>
          <?php echo get_post_meta($post->ID, 'published_in', true); ?>
          <?php if(get_post_meta($post->id, 'published_in_link', true)){ ?>
              </a>
            <?php } ?></em></p>
          <?php } ?>
        <!-- end publication info -->
        <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
        </div>
        <?php if(in_category('poem')){?><div class="poemnav right"><div class="fixer"><a href="<?php echo get_permalink(get_previous_post(true, '')); ?>">></a></div></div><?php } ?>
      <?php endwhile ?>
    </div>
  </div>

<?php get_footer(); ?>

