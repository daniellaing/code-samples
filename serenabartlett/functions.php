<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar1',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
?>