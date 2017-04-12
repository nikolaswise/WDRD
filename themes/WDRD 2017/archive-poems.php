<?php

/**
* @package Cathy Woodard
* Template name: Projects
*/

  $args = array(
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'post_type' => 'poems'
  );
  $post = get_posts($args);
  if($post){
      $url = get_permalink($post[0]->ID);
      wp_redirect( $url, 301 );
      exit;
  }
?>