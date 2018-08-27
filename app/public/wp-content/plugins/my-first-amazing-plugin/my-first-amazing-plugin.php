<?php 

/*
Plugin Name: My First Amazing Plugin
Description: This plugin will change your life
*/

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content) {
  $content = $content . '<p>All content belongs to Fictional University</p>';
  $content = str_replace('Lorem', '****', $content);
  return $content;
}

add_shortcode('programCount', 'programCountFunction');

function programCountFunction() {
  $count = new WP_Query(array(
    'post_type' => 'program'
  ));
  $counter = 0;
  while($count->have_posts()) {
    $count->the_post();
    $counter++;
  }
  return $counter;
}
?>