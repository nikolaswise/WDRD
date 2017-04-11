<?php while(have_posts() ) : the_post(); ?>
  <?php if(in_category('poem')){?>
    <div class="poemnav left">
      <div class="fixer">
        <a href="<?php echo get_permalink(get_next_post(true)); ?>"><</a>
      </div>
    </div><?php } ?>

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
<?php if(in_category('poem')){?><div class="poemnav right"><div class="fixer"><a href="<?php echo get_permalink(get_previous_post(true)); ?>">></a></div></div><?php } ?>
<?php endwhile ?>