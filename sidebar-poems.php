<mark>`sidebar-poems.php`</mark>
<h3>Poems</h3>
<h4>From <em>Opening the Mouth of the Dead</em></h4>
<ul class="leftnav">
  <?php
    global $wp_query;
    $IDOutsideLoop = $wp_query->post->ID;
    $nav_query = new WP_Query('category_name=coming forth&posts_per_page=-1');
    while( $nav_query->have_posts() ) : $nav_query->the_post();
  ?>
    <li<?php if($IDOutsideLoop == $post->ID) { echo " class=\"current\""; } ?> > <a href="<?php the_permalink();?>"><?php the_title();?></a></li>
  <?php endwhile;?>
</ul>

<h4>Other Poems</h4>
<ul>
  <?php $other_query = new WP_Query('cat=3&category__not_in=4&posts_per_page=-1');
    while( $other_query->have_posts() ) : $other_query->the_post();
  ?>
  <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
  <?php endwhile;?>
</ul>