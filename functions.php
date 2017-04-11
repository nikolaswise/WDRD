<?php

add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );

// Get URL of first image in a post
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if($matches [1]){
    $first_img = $matches [1] [0];
  }
  // no image found display default image instead
  if(empty($first_img)){
  $first_img = "";
  }
  return $first_img;
}

function zap_image(){
  global $post, $posts;
  $post->post_content = preg_replace('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', '', $post->post_content, 1);
  return $post->post_content;
}

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

?>
