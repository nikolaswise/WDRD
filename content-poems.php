<?php while(have_posts() ) : the_post(); ?>
  <div class="poemnav left">
    <div class="fixer">
      <a href="<?php echo get_permalink(get_next_post()); ?>"><</a>
    </div>
  </div>

  <?php the_post_thumbnail(); ?>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>


  <!-- publication info -->
  <?php if(get_post_meta($post->ID, 'published_in', true)){ ?>
    <p style="margin-top: 42px;">Published in
      <em>
        <?php if(get_post_meta($post->id, 'published_in_link', true)){ ?>
          <a href="<?php echo get_post_meta($post->id, 'published_in_link', true); ?> ">
        <?php } ?>
          <?php echo get_post_meta($post->ID, 'published_in', true); ?>
        <?php if(get_post_meta($post->id, 'published_in_link', true)){ ?>
          </a>
        <?php } ?>
      </em>
    </p>
  <?php } ?>

  <div class="poemnav right">
    <div class="fixer">
      <a href="<?php echo get_permalink(get_previous_post()); ?>">
        >
      </a>
    </div>
  </div>

<?php endwhile ?>