<mark>`sidebar-news.php`</mark>
<h3>News</h3>
      <ul class="leftnav">
        <?php $nav_query = new WP_Query('category_name=news&posts_per_page=-1');
          while( $nav_query->have_posts() ) : $nav_query->the_post();
        ?>
        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
        <?php endwhile;?>
      </ul>