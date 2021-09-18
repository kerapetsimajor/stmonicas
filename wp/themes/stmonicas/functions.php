<?php

function stmonicas_files() {
 
  wp_enqueue_script('main-school-js', get_theme_file_uri('/main/scripts.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('mobile-school-js', get_theme_file_uri('/main/mobile-menu.js'), array('jquery'), '1.0', true);

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;700');
  wp_enqueue_style('Ionicon-font', '//unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js');
  wp_enqueue_style('Ionic-font', '//unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js');

  wp_enqueue_style('stmonicas_general_styles', get_theme_file_uri('/css/general.css'));
  wp_enqueue_style('stmonicas_main_styles', get_theme_file_uri('/css/style.css', array('stmonicas_general_styles')));
  wp_enqueue_style('stmonicas_mediaQuery_styles', get_theme_file_uri('/css/queries.css', array('stmonicas_main_styles')));

}

add_action('wp_enqueue_scripts', 'stmonicas_files');