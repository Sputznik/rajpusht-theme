<?php


add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('rajpusht-style', get_stylesheet_directory_uri().'/assets/css/style.css', array('sp-core-style'), time() );
});
