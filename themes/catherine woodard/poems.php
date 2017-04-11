<?php
/**
* @package Cathy Woodard
* Template name: Poems
*/
get_header();
?>

<div id="main">
  <div class="wrap">
    <div class="layout-aside fixedElement">
      <?php get_template_part('sidebar', 'poems'); ?>
    </div>
    <div class="layout-main">
      <h1>`poems.php`</h1>
      <?php $adjacent = get_adjacent_post(true, '', false); ?>

      <div class="poemnav left">
        <a href="<?php echo get_permalink(get_previous_post($adjacent)); ?>">
          <
        </a>
      </div>

      <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        query_posts('category_name=poem&paged='.$paged.'&posts_per_page=1');
        while(have_posts() ) : the_post(); ?>
        <div class="page">
          <?php if(catch_that_image()): ?>
            <img class="fill" src="<?php echo catch_that_image();?>" />
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <?php
            $content = get_the_content('Read more');
            $content = preg_replace('/<img[^>]+./','', $content, 1); // Remove first image of Post
            $content = apply_filters('the_content', $content);
            echo $content;
          ?>
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
            <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
        </div>
      <?php endwhile ?>
      <div class="poemnav right">
        <a href="<?php echo get_permalink(get_adjacent_post(true,'',true)); ?>">
          >
        </a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
