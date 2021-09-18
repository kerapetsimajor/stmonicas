<?php

function stmonicas_post_types() {
  
  // Event Post Type
  register_post_type('event', array(
    // 'capability_type' => 'event',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Educator Post Type
  register_post_type('educactor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Educators',
      'add_new_item' => 'Add New Educator',
      'edit_item' => 'Edit Educator',
      'all_items' => 'All Educators',
      'singular_name' => 'Educator'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
}

add_action('init', 'stmonicas_post_types');