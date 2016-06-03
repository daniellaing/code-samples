<?php

// Max upload size

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Register Sidebars
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="card">',
'after_widget' => '</div><div class="card_bottom"></div></div>',
'before_title' => '<h2>',
'after_title' => '</h2><div class="card_inner">',
));

// Thumbnails
add_theme_support('post-thumbnails');

// Custom Excerpt
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = '<p>' .implode(" ",$excerpt).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read more&raquo;' . '</a></p>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}

function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read more&raquo;' . '</a>';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
} 
?>