<!-- <mark>`sidebar.php`</mark> -->



<h3 class="sidebar-large"><?php echo ucwords(get_post_type( get_the_ID() )) ?></h3>

<div class="sidebar-small">
  <a class="open-mobile-sidenav" href="#">
    <h3>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icon"><path d="M28 8H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2zm0 10H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2zm0 10H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2z"/></svg>
      <?php echo ucwords(get_post_type( get_the_ID() )) ?>
    </h3>
  </a>
  <a class="close-mobile-sidenav" href="#">
    <h3>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icon"><path d="M18.404 16l9.9 9.9-2.404 2.404-9.9-9.9-9.9 9.9L3.696 25.9l9.9-9.9-9.9-9.898L6.1 3.698l9.9 9.899 9.9-9.9 2.404 2.406-9.9 9.898z"/></svg>
      Close
    </h3>
  </a>
</div>

<?php
  $type = get_post_type( get_the_ID() );
  $query = new WP_Query(array(
      'post_type' => $type,
      'post_status' => 'publish',
      'posts_per_page' => -1
  ));
?>

<?php
  $sections = array();
  while($query->have_posts()) : $query->the_post();
    $post_group = get_field('navigation_group');
    if( $post_group ):
      if (!in_array($post_group, $sections)) {
        array_push($sections, $post_group);
      };
    endif;
  endwhile;
?>

<div class="sidebar-content">
  <?php foreach ($sections as &$section): ?>
    <h3><?php echo $section; ?></h3>
    <ul class="leftnav">
      <?php while($query->have_posts() ) : $query->the_post(); ?>
        <?php
          $post_object = get_field('navigation_group');
          if( $post_object == $section):
        ?>
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
        <?php endif ?>
      <?php endwhile ?>
    </ul>
    <br>
  <?php endforeach ?>

  <ul class="leftnav">
    <?php while($query->have_posts() ) : $query->the_post(); ?>
      <?php
        $post_object = get_field('navigation_group');
        if(!$post_object):
      ?>
        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
      <?php endif ?>
    <?php endwhile ?>
  </ul>
</div>