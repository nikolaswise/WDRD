<?php
/**
* @package Cathy Woodard
* Template name: Projects
*/
get_header();
?>

<div id="main">
    <div class="wrap">
      <h1>`projects.php`</h1>
      <div id="sidenav">
        <div id="sidenav" class="fixedElement">
        <h3>Projects</h3>
        <ul class="leftnav">
          <?php $nav_query = new WP_Query('category_name=project&posts_per_page=-1');
            while( $nav_query->have_posts() ) : $nav_query->the_post();
          ?>
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile;?>
          <?php
            $bookmarks = get_bookmarks( array(
				    'orderby'        => 'name',
				    'order'          => 'ASC',
				    'category_name'  => 'projects'
                              ));
            // Loop through each bookmark and print formatted output
            foreach ( $bookmarks as $bm ) {
              printf( '<li><a class="relatedlink" href="%s" target="_blank">%s</a>&nbsp;&nbsp;<img src="/wp-content/themes/cathywoodard/img/outbound.png" /></li>', $bm->link_url, __($bm->link_name) );
            }
          ?>
        </ul>
      </div>
      </div>
      <?php $adjacent = get_adjacent_post(true, '', true); ?>
      <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        query_posts('category_name=project&paged='.$paged.'&posts_per_page=1');
        while(have_posts() ) : the_post();
      ?>
      <div class="project">
        <img src="<?php echo catch_that_image(); ?>" />
        <h3><?php the_title(); ?></h3>
        <?php
          $content = get_the_content('Read more');
          $content = preg_replace('/<img[^>]+./','', $content, 1); // Remove first image of Post
          $content = apply_filters('the_content', $content);
          echo $content;
        ?>
      </div>
      <?php endwhile ?>
    </div>
  </div>

<?php get_footer(); ?>

